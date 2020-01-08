<?php 
class Product
{
    private $id= 0;
    private $nome = 0;
    private $prezzo = 0;
    private $attributes;
    public function __construct(int $id, string $nome, float $prezzo, array $attributes = [])
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->attributes = $attributes;
    }
    public function addAttribute($attribute){
        $this->attributes[] = $attribute;
    // print_r($this->attributes);
    }
    public function render(){
        $text = $this->id . " " . $this->nome . " " . $this->prezzo  ;
        $attributesdec = [];
        foreach ($this->attributes as $attribute){
            $attributesdec[]  = $attribute->render();
        }
        if (!empty($attributesdec)) {
            $text.= ', attributi: ' .  implode(', ' , $attributesdec);
        }
        return $text;
    }
}
