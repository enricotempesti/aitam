<?php
namespace Aitam\IndexBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Knp\Menu\ItemInterface as MenuItemInterface;

use Aitam\IndexBundle\Entity\Commenti;

class DinuovoAdmin extends Admin
{
	/**
     * @param \Sonata\AdminBundle\Show\ShowMapper $showMapper
     *
     * @return void
     */
    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
		    
            ->add('title')
            ->add('author')
            ->add('articolo')
            ->add('image')
        ;
    }

    /**
     * @param \Sonata\AdminBundle\Form\FormMapper $formMapper
     *
     * @return void
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            
            ->add('title')
            ->add('author')
            ->add('articolo')
            ->add('file', 'file', array('required' => false))             
        ;
    }

    /**
     * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
     *
     * @return void
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
		    
            ->addIdentifier('title')
            ->add('author')
            ->add('articolo')
            ->add('image', 'string', array('template' => 
            'SonataMediaBundle:MediaAdmin:list_image.html.twig'))
        ;
    }

    /**
     * @param \Sonata\AdminBundle\Datagrid\DatagridMapper $datagridMapper
     *
     * @return void
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('author')
            ->add('articolo')
            ->add('image')
        ;
    }
    
  public function prePersist($file) {
    $this->saveFile($file);
  }

  public function preUpdate($file) {
    $this->saveFile($file);
  }
 
  public function saveFile($file) {
    $basepath = $this->getRequest()->getBasePath();
    $file->upload($basepath);    
  }
}