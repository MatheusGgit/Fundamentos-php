<?php
function a()
{
    try
    {
        echo 'Codigo';
        return 0;
    }
    catch (throwable $e)
    {
        echo 'Problema';
        return 1;
    }
    finally
    {
        echo 'Finally';
    }
}