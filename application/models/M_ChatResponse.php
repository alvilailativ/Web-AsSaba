<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_ChatResponse extends CI_Model
{
    public function getResponse($pesan)
    {
        // query untuk mengambil respon exact dari pertanyaan user
        if(str_contains($pesan, '#')) { 
            $query = $this->db->select('response')
                              ->from('chatbot')
                              ->where('pertanyaan', $pesan)
                              ->get()
                              ->row_array();

            return $query;
        }
        // query untuk mengambil respon dinamis dari pertanyaan user
        else {
            $delimiter = ' ';
            $words = explode($delimiter, $pesan);

            $response_list = array();
            foreach($words as $word) {
                $word = preg_replace('/[^\p{L}\p{N}\s]/u', '', $word);
                $query = $this->db->select('response')
                ->from('chatbot')
                ->like('pertanyaan', $word)
                ->get()
                ->row_array();

                if($query != NULL) {
                    array_push($response_list, $query['response']);
                    continue;
                }
                else {
                    continue;
                }
            }
            return array_unique($response_list);
        }
    }
}