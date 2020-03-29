<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;
use App\Entity\Oferta;
use App\Form\AfegirType;
use Doctrine\Common\Persistence\ObjectManager;
use App\Form\OfertaType;

class AdminOfertaController extends AbstractController
{
    /**
     * @Route("/admin/oferta", name="admin")
     */
    public function admin()
    {   
        $ofertas = $this->getDoctrine()
        ->getRepository(Oferta::class)
        ->findAllWithEmpresa();

        return $this->render('admin/admin_oferta/editarOferta.html.twig', [
            'ofertas' => $ofertas,
        ]);


    }

    /**
     * @Route("/admin/oferta/{id}", name="admin_oferta_modif" , requirements={"id":"\d+"})
     */
    public function admin_oferta_modif(Oferta $oferta, Request $request){

        $manager = $this->getDoctrine()->getManager();
        $form=$this->createForm(OfertaType::class, $oferta);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($oferta);
            $manager->flush();
            return $this->redirectToRoute("admin");
        }

        return $this->render('admin/admin_oferta/adminModifica.html.twig',
        ["oferta" => $oferta, "form" => $form-> createView()]);

    }
    
    /**
     * @Route("/admin/oferta/elim/{id}", name="admin_oferta_elim")
     */
    public function admin_oferta_elim (Oferta $oferta){

        $manager = $this->getDoctrine()->getManager();
        $manager->remove($oferta);
        $manager->flush();

        return $this->redirectToRoute("admin");

    }

    /**
     * @Route("/admin/oferta/add", name="newOferta")
     */
    public function newOferta(Request $request){
        $oferta=new Oferta();
        $manager = $this->getDoctrine()->getManager();
        
        $form=$this->createForm(OfertaType::class, $oferta);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($oferta);
            $manager->flush();
            return $this->redirectToRoute("admin");
        }
        return $this->render('admin/admin_oferta/adminModifica.html.twig',
        ["oferta" => $oferta, "form" => $form-> createView()]);
    }

}