<?php

namespace Project\LineOfWorkBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Project\LineOfWorkBundle\Entity\Job;
use Project\LineOfWorkBundle\Form\JobType;

/**
 * Job controller.
 *
 */
class JobController extends Controller
{

    /**
     * Lists all Job entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $categories = $em->getRepository('ProjectLineOfWorkBundle:Category')->getWithJobs();
        
        foreach($categories as $category){
            $category->setActiveJobs($em->getRepository('ProjectLineOfWorkBundle:Job')->getActiveJobs(
                $category->getId(),$this->container->getParameter('max_jobs_on_job_page_per_category')));
            $category->setMoreJobs($em->getRepository('ProjectLineOfWorkBundle:Job')
                    ->countActiveJobs($category->getId()) - $this->container->getParameter('max_jobs_on_job_page_per_category'));
        }
        
        return $this->render('ProjectLineOfWorkBundle:Job:index.html.twig', array(
            'categories' => $categories,
        ));
    }
    /**
     * Creates a new Job entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Job();
        $entity->setUser($this->getUser());
        $entity->setIsActivated(true);
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('project_line_of_work_job_show', array('id' => $entity->getId())));
        }

        return $this->render('ProjectLineOfWorkBundle:Job:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Job entity.
     *
     * @param Job $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Job $entity)
    {
        $form = $this->createForm(new JobType(), $entity, array(
            'action' => $this->generateUrl('project_line_of_work_job_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Job entity.
     *
     */
    public function newAction()
    {
        $securityContext = $this->container->get('security.context');
        if($securityContext->isGranted('IS_AUTHENTICATED_FULLY')){
            $entity = new Job();
            $entity->setType('full-time');
            $form   = $this->createCreateForm($entity);

            return $this->render('ProjectLineOfWorkBundle:Job:new.html.twig', array(
                'entity' => $entity,
                'form'   => $form->createView(),
            ));  
        } else {
            $this->get('session')->getFlashBag()->add('danger','You must be logged in if u want to add job');
            return $this->redirect($this->generateUrl('project_line_of_work_homepage'));
        }
        
        
        
    }

    /**
     * Finds and displays a Job entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProjectLineOfWorkBundle:Job')->getActiveJob($id);               

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Job entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProjectLineOfWorkBundle:Job:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Job entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProjectLineOfWorkBundle:Job')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Job entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ProjectLineOfWorkBundle:Job:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Job entity.
    *
    * @param Job $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Job $entity)
    {
        $form = $this->createForm(new JobType(), $entity, array(
            'action' => $this->generateUrl('project_line_of_work_job_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Job entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProjectLineOfWorkBundle:Job')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Job entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('project_line_of_work_job_edit', array('id' => $id)));
        }

        return $this->render('ProjectLineOfWorkBundle:Job:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Job entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ProjectLineOfWorkBundle:Job')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Job entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('project_line_of_work_job'));
    }

    /**
     * Creates a form to delete a Job entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('project_line_of_work_job_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
    public function latestJobsAction(){
        $em = $this->getDoctrine()->getManager();
        $latest_jobs = $em->getRepository('ProjectLineOfWorkBundle:Job')->getActiveJobs(null, 4);
        
        return $this->render('ProjectLineOfWorkBundle:Job:latestJobs.html.twig',array(
            'jobs' => $latest_jobs
        ));
    }
}
