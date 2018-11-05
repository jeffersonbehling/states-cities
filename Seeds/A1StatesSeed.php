<?php
use Migrations\AbstractSeed;

/**
 * A1States seed.
 */
class A1StatesSeed extends AbstractSeed
{
    public function run()
    {
        $data = [
            [
                'id' => '264892b1-10b3-4cc5-8523-aecbcde31faf',
                'name' => 'Acre',
                'uf' => 'AC'
            ],
            [
                'id' => '4424fc45-6824-46e0-a0b4-12fa3233ca2a',
                'name' => 'Alagoas',
                'uf' => 'AL'
            ],
            [
                'id' => '4553a616-d5ed-4f7b-bd36-363867716d1e',
                'name' => 'Amapá',
                'uf' => 'AP'
            ],
            [
                'id' => '95b7d73c-2781-4030-ab90-3a8ff7f2c7ab',
                'name' => 'Amazonas',
                'uf' => 'AM'
            ],
            [
                'id' => '8e6793b7-1875-4568-ab26-e2bc294f7fa2',
                'name' => 'Bahia',
                'uf' => 'BA'
            ],
            [
                'id' => 'a0f05b2b-daaa-414f-8054-b0cbf2fd1373',
                'name' => 'Ceará',
                'uf' => 'CE'
            ],
            [
                'id' => '755be08a-b908-4b68-a5a0-479dc8edea9c',
                'name' => 'Distrito Federal',
                'uf' => 'DF'
            ],
            [
                'id' => 'fad7f6f9-4421-4e33-a985-9349dc34376b',
                'name' => 'Espírito Santo',
                'uf' => 'ES'
            ],
            [
                'id' => '1b398c83-6e05-4742-b792-5379482a0d72',
                'name' => 'Goiás',
                'uf' => 'GO'
            ],
            [
                'id' => 'd04e8fc7-87cc-4ccf-bcb6-d6944af31822',
                'name' => 'Maranhão',
                'uf' => 'MA'
            ],
            [
                'id' => '2ec40f29-6e08-4b9a-9659-e4a871276417',
                'name' => 'Mato Grosso',
                'uf' => 'MT'
            ],
            [
                'id' => 'b81c3313-f67b-4154-8efa-2aa3d8aa45e5',
                'name' => 'Mato Grosso do Sul',
                'uf' => 'MS'
            ],
            [
                'id' => 'aa554482-4bde-4d25-891d-cb66ae1c8aa3',
                'name' => 'Minas Gerais',
                'uf' => 'MG'
            ],
            [
                'id' => 'e636cfb4-deb8-4adc-9dec-c912a788370a',
                'name' => 'Pará',
                'uf' => 'PA'
            ],
            [
                'id' => 'e0f4a190-0b4d-43e5-92c2-efd4e88d0ccf',
                'name' => 'Paraíba',
                'uf' => 'PB'
            ],
            [
                'id' => '4f45237c-d22b-4582-ae73-957c3b84c2c7',
                'name' => 'Paraná',
                'uf' => 'PR'
            ],
            [
                'id' => '718155cf-f719-42ae-9443-acf0962bd18f',
                'name' => 'Pernambuco',
                'uf' => 'PE'
            ],
            [
                'id' => 'c67dfa2a-8905-4980-a635-9955e987cf44',
                'name' => 'Piauí',
                'uf' => 'PI'
            ],
            [
                'id' => '27af6ac1-c6ce-4038-a9a0-886c395beda4',
                'name' => 'Rio de Janeiro',
                'uf' => 'RJ'
            ],
            [
                'id' => 'dccddc9f-20d9-46cb-996c-2cc8944dd895',
                'name' => 'Rio Grande do Norte',
                'uf' => 'RN'
            ],
            [
                'id' => '94739910-7d5c-4fe1-bafe-2c13033229f5',
                'name' => 'Rio Grande do Sul',
                'uf' => 'RS'
            ],
            [
                'id' => '36ced34c-c3f5-4529-895e-071271193654',
                'name' => 'Rondônia',
                'uf' => 'RO'
            ],
            [
                'id' => 'a0ddbb8f-4c42-4540-8157-885e6ade28a5',
                'name' => 'Roraima',
                'uf' => 'RR'
            ],
            [
                'id' => '4d451ba9-3398-4766-a978-7c6bf2ede6e9',
                'name' => 'Santa Catarina',
                'uf' => 'SC'
            ],
            [
                'id' => 'add5f255-bd76-4265-abad-f2bf17c49118',
                'name' => 'São Paulo',
                'uf' => 'SP'
            ],
            [
                'id' => 'a40b94fa-5e41-445d-b84e-5d9027148d15',
                'name' => 'Sergipe',
                'uf' => 'SE'
            ],
            [
                'id' => '626f57e3-aa6c-4b4f-9031-49043e3ceeb0',
                'name' => 'Tocantins',
                'uf' => 'TO'
            ],
        ];

        $table = $this->table('states');
        $table->insert($data)->save();
    }
}
