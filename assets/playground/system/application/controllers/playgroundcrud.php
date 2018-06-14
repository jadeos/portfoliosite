<?php


class playgroundcrud extends Controller
{

    function index(){

        $play = array();

        if($query = $this->playground->get_playground())
        {
            $play['playground']=$query;

        }
        $this->load->view('crud',$play);
    }
    function create(){

        $playground = array('address'=> $this->input->post('address'),
            'swings'=>$this->input->post('swings'),
            'slide'=>$this->input->post('slide'),
            'monkeybars'=>$this->input->post('monkey_bars'),
            'merry_go_round'=>$this->input->post('merry_go_round'),
            'spring_rider'=>$this->input->post('spring_rider'),
            'overhead_ladder'=>$this->input->post('overhead_ladder'),
            'playhouses'=>$this->input->post('playhouses'),
            'mazes'=>$this->input->post('mazes'),
            'seesaw'=>$this->input->post('seesaw'),
            'zipline'=>$this->input->post('zipline'),
            'sandbox'=>$this->input->post('sandbox'),
            'jungle_gym'=>$this->input->post('jungle_gym'),
            'longitude'=>$this->input->post('longitude'),
            'latitude'=>$this->input->post('latitude')


        );
        $this->playground->add_playground($playground);

      //$this->index();
        redirect('playgroundcrud');

    }

    function update(){


        $playground = array('address'=> $this->input->post('address'),
            'swings'=>$this->input->post('swings'),
            'slide'=>$this->input->post('slide'),
            'monkey_bars'=>$this->input->post('monkey_bars'),
            'merry_go_round'=>$this->input->post('merry_go_round'),
            'spring_rider'=>$this->input->post('spring_rider'),
            'overhead_ladder'=>$this->input->post('overhead_ladder'),
            'playhouses'=>$this->input->post('playhouses'),
            'mazes'=>$this->input->post('mazes'),
            'seesaw'=>$this->input->post('seesaw'),
            'zipline'=>$this->input->post('zipline'),
            'sandbox'=>$this->input->post('sandbox'),
            'jungle_gym'=>$this->input->post('jungle_gym'),

        );

        $this->playground->update_playground($playground);
        $this->load->view('updatepage',$playground);
    }


    function playground_search(){
        $this->load->helper('form');
        $title = $this->input->post('search');
        $film = array($title => $this->input->post('search'));
        $this->db->where('address', $film[$title]);

        $this->db->limit(1);

        if ($query = $this->playground-> get_playground()) {
            $film['playground'] = $query;

        }
        var_dump($title);
        echo "----------";
        print_r($title);

        $this->load->view('searchresults', $film);


      //  $location= null;
      // $playground = array($location=>$this->input->get_post('location', TRUE));

      //  $this->db->where('address',$playground[$location]);



     //  $this->db->limit(1);
       // if($query = $this->playground->get_playground()) {
      //      $playground['playground'] = $query;

     //   }
        //  $searchResult = $this->playground->search($playground);
      //  $arrayOfClauses = array('address'=>$this->input->post('location'));
//  $this->load->model('playground');
      //  if($query=$this->playground->search($playground)){
         //   $playground['playground']=$query;

      //  }
       // $data['results']=$result;



      //  $this->load->view('searchresults',$playground);

    }
    function searchfacilities(){
        $monkeybars=null;
        $swings=null;
        $slides=null;
        $jungle=null;
        $merrygoround=null;
        $springrider=null;
        $overheadladdee=null;
        $playhouses=null;
        $maze =null;
        $seasaw=null;
        $zipline=null;
        $sandbox=null;
        $this->load->helper('form');

          ///  $search = array(
            //    $swings =>  $this->input->post('fields1'),
             //   $slides => $this->input->post('fields2'),
              //  $monkeybars => $this->input->post('fields3'),
              //  $jungle => $this->input->post('fields4'),
              //  $merrygoround => $this->input->post('fields5'),
              //  $springrider => $this->input->post('fields6'),
              //  $overheadladdee => $this->input->post('fields7'),
              //  $playhouses => $this->input->post('fields8'),
              //  $maze => $this->input->post('fields9'),
              //  $seasaw => $this->input->post('fields10'),
              //  $zipline => $this->input->post('fields11'),
              //  $sandbox => $this->input->post('fields12')

          //  );

           $fields = $this->input->post('fields');

        $search = array($fields => $this->input->post('fields'));

      //  $search['fields'] = implode(",", $fields);
       var_dump($search);


             $this->db->where('swings', $search[$fields]);
             $this->db->where('slide',  $search[$fields]);
             $this->db->where('monkey_bars', $search[$fields]);
              $this->db->where('merry_go_round',  $search[$fields]);
             $this->db->where('spring_rider',  $search[$fields]);
             $this->db->where('overhead_ladder', $search[$fields]);
              $this->db->where('playhouses',  $search[$fields]);
              $this->db->where('mazes',  $search[$fields]);
              $this->db->where('seesaw', $search[$fields]);
              $this->db->where('zipline',  $search[$fields]);
              $this->db->where('sandbox', $search[$fields]);
              $this->db->where('jungle_gym',  $search[$fields]);

            if($query = $this->playground->get_playground()) {
                $search['playground'] = $query;
            }
            $this->load->view('filterresults', $search);



    }
    function delete(){

        $this->playground->delete_playground();
        $this->index();
    }







}