<?php 
namespace prueba\bibliocrud\Controller\Index;
class Index extends Magento\Framework\App\Action\Action

{
    public function excecute()
    {
        echo '<p>You dit it! ? </p>';
        var_dump(_METHOD_);
    }
}