<?php

/**
 * Class PhoneNumber
 * This class allows to generate mobile numbers of all operators in Ivory Coast
 */
class PhoneNumber
{
    /**
     * @var string  name of mobile operator (Orange)
     */
    private $_orange;

    /**
     * @var string name of mobile operator (Mtn)
     */
    private $_mtn;

    /**
     * @var string name of mobile operator (Moov)
     */
    private $_moov;

    /**
     * @var  number of numbers to create
     */
    const NUMERALS_NUMBER = 15;

    /**
     * PhoneNumber constructor.
     * @param array $mobile_operator Contains the name of the different mobile operator
     */
    public function __construct(Array $mobile_operator)
    {
        $this->hydrate($mobile_operator);
    }

    /**
     * @return string returns the name of the Orange mobile operator
     */
    public function getorange()
    {
        return $this->_orange;
    }

    /**
     * @return string returns the name of the Mtn mobile operator
     */
    public function getmtn()
    {
        return $this->_mtn;
    }

    /**
     * @return string string returns the name of the Moov mobile operator
     */
    public function getmoov()
    {
        return $this->_moov;
    }

    /**
     * @param $orange string the name of mobile operator
     */
    public function setOrange($orange)
    {
        $this->_orange = $orange;
    }

    /**
     * @param $mtn string the name of mobile operator
     */
    public function setMtn($mtn)
    {
        $this->_mtn = $mtn;
    }

    /**
     * @param $moov string the name of mobile operator
     */
    public function setMoov($moov)
    {
        $this->_moov = $moov;
    }

    /**
     * @param array $mobile_operator Contains the name of the different mobile operator
     * this function hydrate the class
     */
    public function hydrate(Array $mobile_operator)
    {
        foreach ($mobile_operator as $key => $value) {
            $method = 'set' . $key;
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    /**
     * @param int $nb the number of digits to generate
     * @return string return a number of six digits
     * This function generates a random number of six digits
     */
    protected function random_numbers($nb = 6)
    {
        $nb_init = '';

        for ($i = 0; $i < $nb; $i++) {
            $nb_init .= rand(0, 9);
        }

        return $nb_init;
    }

    /**
     * @return array numbers by mobile operator
     * This function generates mobile numbers for each mobile operator
     */

    public function generate_numbercall()
    {
        /**
         * Mobile operator indicator
         */
        $orange_indic = array('07', '08', '09', '47', '48', '49', '57', '58', '59', '77', '78', '79', '87', '88', '89');
        $mtn_indic = array('04', '05', '06', '44', '45', '46', '54', '55', '56', '74', '75', '76', '84', '85', '86');
        $moov_indic = array('01', '02', '03', '40', '41', '42', '43', '51', '52', '53', '71');

        /**
         * Contains all numbers by mobile operator
         */
        $NumberFindByOperator = array();

        /**
         * Generate and store the numbers
         */
        foreach ($this as $key => $values) {
            switch ($values) {
                // Orange Numbers calls
                case 'orange';

                    $lenght = sizeof($orange_indic) - 1;

                    for ($i = 0; $i < self::NUMERALS_NUMBER; $i++) {
                        $tire_sort = rand(0, $lenght);
                        $numeral = $orange_indic[$tire_sort] . $this->random_numbers();
                        $numeral_tab_oran[] = $numeral;
                    }

                    $NumberFindByOperator['Orange'] = $numeral_tab_oran;

                    break;

                // Mtn Numbers calls
                case 'mtn';

                    $lenght = sizeof($mtn_indic) - 1;

                    for ($i = 0; $i < self::NUMERALS_NUMBER; $i++) {
                        $tire_sort = rand(0, $lenght);
                        $numeral = $mtn_indic[$tire_sort] . $this->random_numbers();
                        $numeral_tab_mtn[] = $numeral;
                    }

                    $NumberFindByOperator['Mtn'] = $numeral_tab_mtn;

                    break;

                // Moov Numbers calls
                case 'moov';

                    $lenght = sizeof($moov_indic) - 1;

                    for ($i = 0; $i < self::NUMERALS_NUMBER; $i++) {
                        $tire_sort = rand(0, $lenght);
                        $numeral = $moov_indic[$tire_sort] . $this->random_numbers();
                        $numeral_tab_moov[] = $numeral;
                    }

                    $NumberFindByOperator['Moov'] = $numeral_tab_moov;

                    break;

            }
        }

        return $NumberFindByOperator;
    }
}