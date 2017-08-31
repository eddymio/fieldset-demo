 <?php
 // Filename: /module/Blog/src/Blog/Mapper/PostMapperInterface.php
 namespace Fieldset\Mapper;

 use Fieldset\Entity\ProductInterface;

 interface ProductMapperInterface
 {
     /**
      * @param int|string $id
      * @return ProductInterface
      * @throws \InvalidArgumentException
      */
     public function Product($id);

     /**
      * @return array|PostInterface[]
      */
     public function findAll();
 }