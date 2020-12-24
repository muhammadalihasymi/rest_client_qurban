<?php

use GuzzleHttp\Client;

class Qurban_m extends CI_model
{
    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/ci_rest/index.php/qurban_c/',

        ]);
    }
    public function getAllQurban()
    {
        $respone = $this->_client->request('GET', 'qurban', [
            'query' => [
                'API-TOKEN' => '12345'
            ]
        ]);

        $result = json_decode($respone->getBody()->getContents(), true);

        return $result['data'];
    }
    public function getQurbanById($id)
    {
        $response = $this->_client->request('GET', 'qurban', [
            'query' => [
                'API-TOKEN' => '12345',
                'id' => $id
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result['data'][0];
    }

    public function tambahDataQurban()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'alamat' => $this->input->post('alamat', true),
            'telpon' => $this->input->post('telpon', true),
            'hewan' => $this->input->post('hewan', true),
            'API-TOKEN' => '12345'
        ];
        $response = $this->_client->request('POST', 'qurban', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getbody()->getContents(), true);
        return $result;
    }

    public function hapusDataQurban($id)
    {
        $response = $this->_client->request('DELETE', 'qurban', [
            'form_params' => [
                'kode_qurban' => $id,
                'API-TOKEN' => '12345'
            ]
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result;
    }


    public function ubahDataQurban()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'alamat' => $this->input->post('alamat', true),
            'telpon' => $this->input->post('telpon', true),
            'kode_qurban' => $this->input->post('kode_qurban', true),
            'hewan' => $this->input->post('hewan', true),
            'API-TOKEN' => '12345'
        ];

        $response = $this->_client->request('PUT', 'qurban', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getbody()->getContents(), true);

        return $result;
    }
}
