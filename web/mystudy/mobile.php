<?php  
abstract class mobile{  
    abstract public function getInfo();  
    abstract public function getPrice();  
}  
  
class iphone extends mobile{  
  
    private $price=4999;  
    private $info='官方标配（手机+电源+数据线+耳机）';  
      
    public function getInfo(){  
        return $this->info;  
    }  
      
    public function getPrice(){  
        return $this->price;  
    }  
  
}  
  
class lumia920 extends mobile{  
  
    private $price=4399;  
    private $info='官方标配（手机+电源+数据线+耳机）';  
      
    public function getInfo(){  
        return $this->info;  
    }  
      
    public function getPrice(){  
        return $this->price;  
    }  
  
}  
  
  
//装饰类  
abstract class decorateIphone extends mobile{  
  
    protected $iphone;  
      
    public function __construct(mobile $iphone){  
        $this->iphone=$iphone;  
    }   
  
}  
  
class bare extends decorateIphone{  
      
    private $info='裸机（手机）';  
      
    public function getInfo(){  
        return $this->info;  
    }  
    public function getPrice(){  
        return $this->iphone->getPrice()-200;  
    }  
  
}  
  
class fullSet extends decorateIphone{  
      
    private $info='套装（手机+电源+数据线+耳机+手机壳+贴膜+移动电源）';  
      
    public function getInfo(){  
        return $this->info;  
    }  
    public function getPrice(){  
        return $this->iphone->getPrice()+100;  
    }  
      
}  
  
$iphone=new fullSet(new iphone());  
echo 'iphone全套配置价格为：'.$iphone->getPrice().'，配置为：'.$iphone->getInfo();  
echo '<br>';  
$lumia920=new bare(new lumia920());  
echo 'lumia920裸机价格为：'.$lumia920->getPrice().'，配置为：'.$lumia920->getInfo();  
?>  