<?php



class CreditCard
{
    private $number;
    private $cvc;
    private $expireDate;
    private $circuit;
    private $name;
    private $surname;





    function __construct(int $_number, int $_cvc, string $_expireDate)
    {
        // // funziona anche sul costruttore
        // $date = new DateTime('now');
        // $_expireDate = DateTime::createFromFormat('m/Y', $_expireDate);

        // if ($date > $_expireDate) {
        //     throw new Exception("La carta di credito e' scaduta");
        // }
        //$this->expireDate = $_expireDate->format('m/Y');

        $this->number = $_number;
        $this->cvc = $_cvc;
        $this->expireDate = $_expireDate;
    }
    public function setCreditExpireDate(string $_expireDate)
    {
        $date = new DateTime('now');
        $_expireDate = DateTime::createFromFormat('m/Y', $_expireDate);

        if ($date > $_expireDate) {
            throw new Exception("La carta di credito e' scaduta");
        }
        $this->expireDate = $_expireDate->format('m/Y');
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
