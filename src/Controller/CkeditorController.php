<?php

namespace App\Controller;

use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CkeditorController extends AbstractController
{
    /**
     * @Route("/ckeditor", name="ckeditor")
     */
    public function ckeditor()
    {
        $form = $this->createFormBuilder()
      ->add('content', CKEditorType::class, [
          'config'=> [
              'uiColor' => "black",
              'toolbar' =>'full',
              'required' => true
          ]
      ])
            ->getForm();


        return $this->render('ckeditor.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
