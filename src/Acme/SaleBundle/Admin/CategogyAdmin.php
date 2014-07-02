<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace Acme\SaleBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Acme\SaleBundle\Entity\CategogyRepository;



class CategogyAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
	
	
	
	/*
      $formMapper
            ->add('name')
          ->add('status')
       ;
		
		
		$formMapper->add('name', 'choice', array(
					'choices' => array('m' => 'Male', 'f' => 'Female')
			));
			
		
		
		
		
		
		
		
		
		$formMapper->add('name')	
					
			->add('status', 'choice', array(
				'choices' => array('0' => 'Hiện', '1' => 'Ẩn'),
				'preferred_choices' => array('0'),
			))
			
			;


					
					/*
					
				->add('status', 'choice', array(
						'choices' => array(
							'0' => 'Hiện',
							'1' => 'Ẩn'
						), 'preferred_choices' => array('0'),
						'required'    => false,
						'empty_value' => 'Choose your gender',
						'empty_data'  => null
					))	
					
					
					
					
	select tìm kiếm				
	->add('image', 'choice', array(
    'choices'   => array(
        'morning'   => 'Morning',
        'afternoon' => 'Afternoon',
        'evening'   => 'Evening',
    ),
    'multiple'  => true,
))


					
					*/


	
	$formMapper
	->add('category', 'entity', array(
        'class'    => 'Acme\SaleBundle\Entity\category',
));		
						
					
					
					
					
					
					

    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
         ->add('status')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('status')
     
        ;
    }
	
	
		function ConVertVN($inputString)		
		{		
		$trans = array (	
		'á' => 'a', 'à' => 'a', '?' => 'a', 'ã' => 'a', '?' => 'a', 
		'Á' => 'A', 'À' => 'A', '?' => 'A', 'Ã' => 'A', '?' => 'A',		
		'â' => 'a', '?' => 'a', '?' => 'a', '?' => 'a', '?' => 'a', '?' => 'a',		
		'Â' => 'A', '?' => 'A', 'À' => 'A', '?' => 'A', '?' => 'A', '?' => 'A',	
		'a' => 'a', '?' => 'a', '?' => 'a', '?' => 'a', '?' => 'a', '?' => 'a',	
		'A' => 'A', '?' => 'A', '?' => 'A', '?' => 'A', '?' => 'A', '?' => 'A',		
		'é' => 'e', 'è' => 'e', '?' => 'e', '?' => 'e', '?' => 'e',				
		'É' => 'E', 'È' => 'E', '?' => 'E', '?' => 'E', '?' => 'E',			
		'ê' => 'e', '?' => 'e', '?' => 'e', '?' => 'e', '?' => 'e', '?' => 'e', 	
		'Ê' => 'E', '?' => 'E', '?' => 'E', '?' => 'E', '?' => 'E', '?' => 'E',	
		'í' => 'i', 'ì' => 'i', '?' => 'i', 'i' => 'i', '?' => 'i', 			
		'Í' => 'I', 'Ì' => 'I', '?' => 'I', 'I' => 'I', '?' => 'I',		
		'ó' => 'o', 'ò' => 'o', '?' => 'o', 'õ' => 'o', '?' => 'o', 	
		'Ó' => 'O', 'Ò' => 'O', '?' => 'O', 'Õ' => 'O', '?' => 'O',		
		'o' => 'o', '?' => 'o', '?' => 'o', '?' => 'o', '?' => 'o', '?' => 'o',	
		'O' => 'O', '?' => 'O', '?' => 'O', '?' => 'O', '?' => 'O', '?' => 'O',		
		'ô' => 'o', '?' => 'o', '?' => 'o', '?' => 'o', '?' => 'o', '?' => 'o', 	
		'Ô' => 'O', '?' => 'O', '?' => 'O', '?' => 'O', '?' => 'O', '?' => 'O',	
		'ú' => 'u', 'ù' => 'u', '?' => 'u', 'u' => 'u', '?' => 'u', 		
		'Ú' => 'U', 'Ù' => 'U', '?' => 'U', 'U' => 'U', '?' => 'U',	
		'u' => 'u', '?' => 'u', '?' => 'u', '?' => 'u', '?' => 'u', '?' => 'u',	
		'U' => 'U', '?' => 'U', '?' => 'U', '?' => 'U', '?' => 'U', '?' => 'U',
		'ý' => 'y', '?' => 'y', '?' => 'y', '?' => 'y', '?' => 'y', 			
		'Ý' => 'Y', '?' => 'Y', '?' => 'Y', '?' => 'Y', '?' => 'Y',			
		'd' => 'd',				
		'Ð' => 'D',				   			
		' ' => '-' 			
		);					
		$string = strtr ( $inputString, $trans );  	
		$string = strtolower($string);		
		$string = preg_replace('/[^a-z0-9]+/i',' ', $string); 		
		$string = trim($string); 			
		$string = preg_replace('/ /', '-', $string);
		return $string;			
	}
}