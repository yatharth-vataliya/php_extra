<?php

// Before PHP 8.4

class P83Locale
{
    private string $languageCode;

    private string $countryCode;

    public function __construct(string $languageCode, string $countryCode)
    {
        $this->setLanguageCode($languageCode);
        $this->setCountryCode($countryCode);
    }

    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    public function setLanguageCode(string $languageCode): void
    {
        $this->languageCode = $languageCode;
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function setCountryCode(string $countryCode): void
    {
        $this->countryCode = strtoupper($countryCode);
    }

    public function setCombinedCode(string $combinedCode): void
    {
        [$languageCode, $countryCode] = explode('_', $combinedCode, 2);

        $this->setLanguageCode($languageCode);
        $this->setCountryCode($countryCode);
    }

    public function getCombinedCode(): string
    {
        return \sprintf('%s_%s', $this->languageCode, $this->countryCode);
    }
}

$brazilianPortuguese = new P83Locale('pt', 'br');
var_dump($brazilianPortuguese->getCountryCode()); // BR
var_dump($brazilianPortuguese->getCombinedCode()); // pt_BR

// IN PHP 8.4

class P84Locale
{
    public string $languageCode;

    public string $countryCode
    {
        set (string $countryCode) {
            $this->countryCode = strtoupper($countryCode);
        }
    }

    public string $combinedCode
    {
        get => \sprintf("%s_%s", $this->languageCode, $this->countryCode);
        set (string $value) {
            [$this->countryCode, $this->languageCode] = explode('_', $value, 2);
        }
    }

    public function __construct(string $languageCode, string $countryCode)
    {
        $this->languageCode = $languageCode;
        $this->countryCode = $countryCode;
    }
}

$brazilianPortuguese = new P84Locale('pt', 'br');
var_dump($brazilianPortuguese->countryCode); // BR
var_dump($brazilianPortuguese->combinedCode); // pt_BR

class P84Locale2
{

    public function __construct(
        public string $languageCode,
        public string $countryCode {
            /* set (string $countryCode) {
                $this->countryCode = strtoupper($countryCode);
            }*/

            // short form of set
            // set => strtoupper($value);

            // or we can use this form also
            set {
                $this->countryCode = strtoupper(($value));
            }

            /* get {
                return $this->countryCode . 'some_value';
            } */

            // short form of get
            get => $this->countryCode . ' some_Value';
        }
    )
    {}

    public string $combinedCode
    {
        get => \sprintf("%s_%s", $this->languageCode, $this->countryCode);
        set (string $value) {
            [$this->countryCode, $this->languageCode] = explode('_', $value, 2);
        }
    }
}

$indianHind = new P84Locale2('hindi', 'indian');
var_dump($indianHind->countryCode);
var_dump($indianHind->combinedCode);

