<?php
namespace App\Models\Contracts;

class JsonBaseModel extends BaseModel  {
    private $db_folder;
    private $table_file_path;

    public function __construct()
    {
        $this->db_folder = BASEURL . 'Storage/jsondb/';
        $this->table_file_path = $this->db_folder . $this->table . '.json';

    }

    # Create (insert)
    public function read_table(){
        $table_data = json_decode(file_get_contents($this->table_file_path));
        return $table_data;
    }
    public function write_table($data){
        $data_json = json_encode($data);
        file_put_contents($this->table_file_path, $data_json );
    }

    public function create(array $new_data ) : int
    {
        $table_data = $this->read_table();
        $table_data[] = $new_data;
        $this->write_table($table_data);
        return $new_data[$this->primary_key];
    }

    # Read (select) single | multiple
    public function find($id) : object
    {
        $table_data = $this->read_table();
        foreach ($table_data as $row){
            if ($row->{$this->primary_key} === $id)
                return $row;
        }
        return (object)[null];
    }

    public function getAll() : array
    {
        return $this->read_table();
    }

    public function get(array $columns, array $where) : array
    {
        return [];
    }

    # Update records
    public function update(array $data, array $where) : int
    {
        return 2;
    }

    # Delete
    public  function delete(array $where) : int
    {
        return 3;
    }
}
