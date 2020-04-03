<?php

namespace App\Controller\Admin;

use App\Entity\Empresa;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\EmpresaType;
class AdminEmpresaController extends AbstractController
{
    /**
     * @Route("/admin/empresa", name="adminEmpresa")
     */
    public function index()
    {
        $empresas = $this->getDoctrine()
        ->getRepository(Empresa::class)
        ->getEmpresas();

        return $this->render('admin/admin_empresa/index.html.twig', [
            'empresas' => $empresas,
        ]);

    }
    /**
     * @Route("/admin/empresa/{id}", name="admin_empresa_modif" , requirements={"id":"\d+"})
     */
    public function admin_empresa_modif(empresa $empresa, Request $request){

        $manager = $this->getDoctrine()->getManager();
        $form=$this->createForm(EmpresaType::class, $empresa);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($empresa);
            $manager->flush();
            return $this->redirectToRoute("adminEmpresa");
        }

        return $this->render('admin/admin_empresa/addEmpresa.html.twig',
        ["empresa" => $empresa, "form" => $form-> createView()]);

    }
    
    /**
     * @Route("/admin/empresa/elim/{id}", name="admin_empresa_elim")
     */
    public function admin_empresa_elim (empresa $empresa){

        $manager = $this->getDoctrine()->getManager();
        $manager->remove($empresa);
        $manager->flush();

        return $this->redirectToRoute("adminEmpresa");

    }

    /**
     * @Route("/admin/empresa/add", name="newEmpresa")
     */
    public function newempresa(Request $request){
        $empresa=new empresa();
        $manager = $this->getDoctrine()->getManager();
        
        $form=$this->createForm(EmpresaType::class, $empresa);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($empresa);
            $manager->flush();
            return $this->redirectToRoute("adminEmpresa");
        }
        return $this->render('admin/admin_empresa/addEmpresa.html.twig',
        ["empresa" => $empresa, "form" => $form-> createView()]);
    }
}
