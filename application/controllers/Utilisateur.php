<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Controller {

	public function __construct(){
        parent::__construct();
		session_start();
		$this->load->model('utilisateur/Utilisateurmodel','Utilisateurmodel');
		$this->load->model("objectif/Objectifmodel" , 'Objectifmodel');

	}
	public function inscription()
	{
		$this->load->view('utilisateur/inscription');
	}
	public function inscription_trait()
	{
		$nom=$this->input->post('nom');
		$prenom=$this->input->post('prenom');
		$date_naissance=$this->input->post('date_naissance');
		$genre=$this->input->post('genre');
		$mail=$this->input->post('mail');
		$mdp=$this->input->post('mdp');
		$this->Utilisateurmodel->insert_utilisateur($nom,$prenom,$date_naissance,$genre,$mail,$mdp);

		redirect(site_url('Objectif/insert_objectif'));
	}

	public function inscription_sante_client()
	{
		$this->load->view('utilisateur/inscription_sante_client');
	}
	public function inscription_trait_sante_client()
	{
		session_start();
		$id=$_SESSION['id_utilisateur'];
		$poids=$this->input->post('poids');
		$taille=$this->input->post('taille');
		$this->Utilisateurmodel->insert_taille_utilisateur($taille,$id);
		$this->Utilisateurmodel->insert_taille_utilisateur($poids,$id);

		redirect(base_url('makany amin ny choix objectif'));
	}
	 
	public function login()
	{
		$this->load->view('utilisateur/Login_utilisateur');	
	}
	public function verif_login()
	{
		$mail=$this->input->post('mail');
		$mdp=$this->input->post('mdp');
        $verification=$this->Utilisateurmodel->login_utilisateur($mail,$mdp);

		if($verification==null){
			redirect("Utilisateur/login");
		}
		else{
			$_SESSION['id_utilisateur'] = $verification['id_utilisateur'];
			redirect(site_url("Utilisateur/home"));
		}
	}

	public function home()
	{
		$id = $_SESSION['id_utilisateur'];
		$data['title'] = "Profil";
		$data['body'] = 'utilisateur/home';
		$data['user'] = $this->Utilisateurmodel->get_one_utilisateur($id);
		$data['poids'] = $this->Utilisateurmodel->get_utilisateur_poids($id);
		$data['taille'] = $this->Utilisateurmodel->get_utilisateur_taille($id);
		$data['genre'] = $this->Utilisateurmodel->get_genre($data['user']['genre']);
		$data['objectif'] = $this->get_objectif_now();
		$data['action'] = $this->Objectifmodel->get_lose_or_gain($data['objectif']['objectif']);
		$data['recharge']=$this->get_etat_recharge();
		$data['depense']=$this->get_etat_depense();
		$data['etat']=$data['recharge']-$data['depense'];
		
		$this->load->view('template/front-office/index' , $data);
	}

	public function modifier()
	{
		$id=$_SESSION['id_utilisateur'];
		$data['title'] = "Update Profil";
		$data['body'] = 'utilisateur/modifier_profil';
		$data['detail']=$this->Utilisateurmodel->get_one_utilisateur($id);
		$data['poids'] = $this->Utilisateurmodel->get_utilisateur_poids($id);
		$data['taille'] = $this->Utilisateurmodel->get_utilisateur_taille($id);
		$this->load->view('template/front-office/index',$data);
	}

	public function modifier_trait()
	{
		$nom=$this->input->post('nom');
		$prenom=$this->input->post('prenom');
		$poids=$this->input->post('poids');
		$taille=$this->input->post('taille');
		$mail=$this->input->post('mail');
		$mdp=$this->input->post('mdp');
		$id=$_SESSION['id_utilisateur'];
		$this->Utilisateurmodel->modification_trait_utilisateur($nom,$prenom,$mail,$mdp,$taille,$poids,$id);
		redirect(base_url('Utilisateur/home'));
	}

	public function profil()
	{
		session_start();
		$id=$_SESSION['id_utilisateur'];
		$data['detail']=$this->Utilisateurmodel->get_one_utilisateur($id);
		$this->load->view('utilisateur/profil',$data);
	}

	public function logout()
	{
		session_destroy();
		redirect(site_url('utilisateur/loginutilisateur'));
	}

	public function get_objectif_now()
	{
		$id=$_SESSION['id_utilisateur'];
		$this->load->model('utilisateur/Utilisateurmodel','Utilisateurmodel');
		$data = $this->Utilisateurmodel->get_objectif_now_utilisateur($id);
		return $data;
	}

	public function set_objectif_with_imc()
	{
		$id=$_SESSION['id_utilisateur'];
		$this->load->model('objectif/Objectifmodel','Objectifmodel');
		$imc=$this->Objectifmodel->getIMC($id);
		if($imc<21)
		{
			$result['poids']=21-$imc;
			$result['azo_perdu']=1;
		}
		if($imc>21)
		{
			$result['poids']=$imc-21;
			$result['azo_perdu']=0;
		}

		$this->Objectifmodel->insert_objectif($id,$result['azo_perdu'],$result['poids']);

	}

	public function get_etat_depense()
    {
        $result;
        $id_utilisateur=$_SESSION['id_utilisateur'];

        $this->load->model('regime/Regimemodel','Regimemodel');
        $regimes_achetee=$this->Regimemodel->get_regime_achetee_par_client($id_utilisateur);

        $prix_total_achetee=0;
        for($i=0;$i<count($regimes_achetee);$i++)
        {
			$haha=$this->Regimemodel->get_prix_total_one_regime($regimes_achetee[$i]['id_regime']);
            $prix_total_achetee=$prix_total_achetee+$haha['prix_total'];
        }
        return $prix_total_achetee;
    }
	public function get_etat_recharge()
	{
		$result;
        $id_utilisateur=$_SESSION['id_utilisateur'];
		$this->load->model('code/Codemodel','Codemodel');
		$result=$this->Codemodel->get_prix_rechargement_par_utilisateur($id_utilisateur);
		return $result['somme_totale'];
	}
}
