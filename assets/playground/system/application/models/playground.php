<?php

class playground extends Model
{
    function get_playground()
    {
        $query = $this->db->get('playground');

        return $query->result();


    }



    function add_playground($playground)
    {
        $this->db->insert('playground', $playground);

        return;

    }

    function delete_playground()
    {
        $this->db->where('playground_id', $this->uri->segment(3));
        $this->db->delete('playground');

    }

    function update_playground($playground)
    {
        $this->db->where('playground_id', $this->uri->segment(3));
        $this->db->update('playground',$playground);
    }


}