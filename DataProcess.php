<?php

class DataProcess
{
    /** @var string  */
    private $file = '';

    /**
     * @param $fileName
     */
    public function setFile($fileName)
    {
        if (is_string($fileName)) {
            $this->file = __DIR__ . '/' . $fileName;
        }
    }

    /**
     * @param $string
     * @return int
     */
    public function hasLetters($string) {
        return preg_match('/[a-zA-Z]/', $string);
    }

    /**
     * @return array
     */
    public function getResult()
    {
        $result = [];

        if (file_exists($this->file)){
            $file_content = file_get_contents($this->file);
            $rows = explode("\n", $file_content);

            foreach($rows as $row => $data)
            {
                if (!$this->hasLetters($data))
                {
                    $result[$row] = array_sum(explode(' ', $data));
                }
            }
            arsort($result);
        }

        return $result;
    }
}
