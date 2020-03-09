<?php
// Файл authenticity.php

class Authenticity
{

    public function Get(int $inn)
    {
        if ($inn == 253402065152 || $inn == 772739580300) 
            {
                $result = [
						   'inn' => $inn,
						   'message' => 'По заданным критериям поиска сведений не найдено.',
						   'authenticity' => true
						];
            } 
        else if ($inn == 784100362403 || $inn == 332501373163)
            {
                $result = [
						   'inn' => $inn,
						   'message' => 'Наличие признака недостоверности',
						   'authenticity' => false
						];

            }
        else
        	{
        		$result = [
						   'inn' => $inn,
						   'message' => 'Вообще не то!',
						   'authenticity' => false
						];	
        	}

        return $result;
    }
}
