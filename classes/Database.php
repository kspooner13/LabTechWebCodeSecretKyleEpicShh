<?php
class Database {
 

    private $link;
    private $error;
    private $errno;
    private $query;
	private $host;
	private $user;
	private $pass;
    private $name;
	
 
    function __construct($host, $user, $pass, $name = "", $conn = 1) {
        $this -> host = $host;
        $this -> user = $user;
        $this -> pass = $pass;
        if (!empty($name)) $this -> name = $name;      
        if ($conn == 1) $this -> connect();
    }
 
    function __destruct() {
        @mysqli_close($this->link);
    }
 
    public function connect() {
        if ($this -> link = mysqli_connect($this -> host, $this -> user, $this -> pass)) {
            if (!empty($this -> name)) {
                if (!mysqli_select_db($this -> link, $this -> name)) $this -> exception("Could not connect to the database!");
            }
        } else {
            $this -> exception("Could not create database connection!");
        }
    }
 
    public function close() {
        @mysqli_close($this->link);
    }
 
    public function query($sql) {
        if ($this->query = @mysqli_query($this->link, $sql)) {
            return $this->query;
        } else {
            $this->exception("Could not query database!");
            return false;
        }
    }
 
    public function num_rows($qid) {
        if (empty($qid)) {         
            $this->exception("Could not get number of rows because no query id was supplied!");
            return false;
        } else {
            return mysqli_num_rows($qid);
        }
    }
 
    public function fetch_array($qid) {
        if (empty($qid)) {
            $this->exception("Could not fetch array because no query id was supplied!");
            return false;
        } else {
            $data = mysqli_fetch_array($qid);
        }
        return $data;
    }
 
    public function fetch_array_assoc($qid) {
        if (empty($qid)) {
            $this->exception("Could not fetch array assoc because no query id was supplied!");
            return false;
        } else {
            $data = mysqli_fetch_array($qid, mysqli_ASSOC);
        }
        return $data;
    }
 
    public function fetch_all_array($sql, $assoc = true) {
        $data = array();
        if ($qid = $this->query($sql)) {
            if ($assoc) {
                while ($row = $this->fetch_array_assoc($qid)) {
                    $data[] = $row;
                }
            } else {
                while ($row = $this->fetch_array($qid)) {
                    $data[] = $row;
                }
            }
        } else {
            return false;
        }
        return $data;
    }
 
    public function last_id() {
        if ($id = mysqli_insert_id()) {
            return $id;
        } else {
            return false;
        }
    }
 
    private function exception($message) {
        if ($this->link) {
            $this->error = mysqli_error($this->link);
            $this->errno = mysqli_errno($this->link);
        } else {
            $this->error = mysqli_error();
            $this->errno = mysqli_errno();
        }
        if (PHP_SAPI !== 'cli') {
        ?>
 
            <div class="alert-bad">
                <div>
                    Database Error
                </div>
                <div>
                    Message: <?php echo $message; ?>
                </div>
                <?php if (strlen($this->error) > 0): ?>
                    <div>
                        <?php echo $this->error; ?>
                    </div>
                <?php endif; ?>
                <div>
                    Script: <?php echo @$_SERVER['REQUEST_URI']; ?>
                </div>
                <?php if (strlen(@$_SERVER['HTTP_REFERER']) > 0): ?>
                    <div>
                        <?php echo @$_SERVER['HTTP_REFERER']; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php
        } else {
                    echo "mysqli ERROR: " . ((isset($this->error) && !empty($this->error)) ? $this->error:'') . "\n";
        };
    }
 
}
?>