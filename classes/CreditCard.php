<?php



class CreditCard
{
    private $number;
    private $cvc;
    private $expireDate;
    private $circuit;
    private $name;
    private $surname;





    function __construct(int $_number, int $_cvc, $_expireDate)
    {


        $this->number = $_number;
        $this->cvc = $_cvc;
        $this->expireDate = $_expireDate;
    }
    public function setCreditExpireDate(string $_expireDate)
    {
        $date = new DateTime('now');
        $date = $date->format('m/Y');
        echo '<div>';
        //echo $date;
        $_expireDate = DateTime::createFromFormat('m/Y', $_expireDate)->format('m/Y');
        var_dump($_expireDate, $date);
        var_dump($date - $_expireDate);
        echo '</div>';
        if ($date > $_expireDate) {
            throw new Exception("La carta di credito e' scaduta");
        }
        $this->expireDate = $_expireDate;
    }
    public function setCreditCardName($_name)
    {
        $this->name = $_name;
    }
    public function setCreditCardSurname($_surname)
    {
        $this->surname = $_surname;
    }
    public function setCreditCircuit($_circuit)
    {
        $this->circuit = $_circuit;
    }
    public function getCreditCardExpireDate()
    {
        return $this->expireDate;
    }
}
