<?php

namespace POP\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use POP\AdminBundle\Entity\Pays;
use POP\AdminBundle\Form\PaysType;

/**
 * Pays controller.
 *
 */
class PaysController extends Controller
{
    /**
     * Lists all Pays entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pays = $em->getRepository('POPAdminBundle:Pays')->findAll();

        return $this->render('POPAdminBundle:Pays:index.html.twig', array(
            'pays' => $pays,
        ));
    }

    /**
     * Creates a new Pays entity.
     *
     */
    public function newAction(Request $request)
    {
        $pay = new Pays();
        $form = $this->createForm('POP\AdminBundle\Form\PaysType', $pay);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pay);
            $em->flush();

            return $this->redirectToRoute('pays_show', array('id' => $pay->getId()));
        }

        return $this->render('POPAdminBundle:Pays:new.html.twig', array(
            'pay' => $pay,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Pays entity.
     *
     */
    public function showAction(Pays $pay)
    {
        $deleteForm = $this->createDeleteForm($pay);

        return $this->render('POPAdminBundle:Pays:show.html.twig', array(
            'pay' => $pay,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Pays entity.
     *
     */
    public function editAction(Request $request, Pays $pay)
    {
        $deleteForm = $this->createDeleteForm($pay);
        $editForm = $this->createForm('POP\AdminBundle\Form\PaysType', $pay);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pay);
            $em->flush();

            return $this->redirectToRoute('pays_edit', array('id' => $pay->getId()));
        }

        return $this->render('POPAdminBundle:Pays:edit.html.twig', array(
            'pay' => $pay,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Pays entity.
     *
     */
    public function deleteAction(Request $request, Pays $pay)
    {
        $form = $this->createDeleteForm($pay);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pay);
            $em->flush();
        }

        return $this->redirectToRoute('pays_index');
    }

    /**
     * Creates a form to delete a Pays entity.
     *
     * @param Pays $pay The Pays entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Pays $pay)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pays_delete', array('id' => $pay->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
