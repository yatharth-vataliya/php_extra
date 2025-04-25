<?php

class try_return
{
    public function ret()
    {
        try {
            echo 'in try block';
            echo '<br/>';

            return 'try is executed'; // this return statement has no effect when there is finally block is declared after catch block with return statement;
            throw new Exception('just to inform of you about the exception in PHP'); // this statement has no effect ;
        } catch (Exception $exception) {
            echo $exception->getMessage();
        } finally {
            // return "finally is excecuted"; // if there is not return statement in finally block then first finally block will executed and then try block return statement is executed;
            echo ' after return statement ';
        }
    }

    public function after_return()
    {
        return 'This is return statement of '.__FUNCTION__.'<br/>'.__METHOD__;
        // __FUNCTION__ return the name of the funciton only :- after_return
        // __METHOD__ return the name of the function with class name also like :- try_return::after_return
        echo 'after return '; // this statement is never executed it means after return statement there is nothing is executed;

    }
}
$try = new try_return;
echo $try->ret();
echo $try->after_return();
