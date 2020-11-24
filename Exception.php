<?php

class Exceptions {
    public function fako(){
        try{
            throw new Exception("Hello this is ".__METHOD__);
        }
        // finally{
        //     echo "This is finally block"
        // } // we can't declare finally block before the catch block if catch block is present if there is not catch block that time finally block execute and then give a fatal error and stop the script execution;
        catch(Exception $e){
            echo $e->getMessage();
            echo "<br/>";
            echo __LINE__;
        }
        catch(NullPointerException $e){
            echo $e->getMessage();
            echo __LINE__;
        }catch(Exception $e){
            echo "This is another catch block {$e->getMessage()}";
            echo __LINE__;
        } // multiplue catch block is allowd;
    }
}

(new Exceptions)->fako();

?>