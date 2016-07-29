<?php
namespace System;

class Notification
{

    public static function show($message, $type)
    {
        if($type == 'success')
        {
            echo'
                <div class="alert alert-success alert-white rounded">
                    <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
                    <div class="icon">
                        <i class="fa fa-check"></i>
                    </div>
                    <strong>Félicitation !</strong>
                    '.$message.'
                </div>
            ';
        }
        elseif($type == 'warning')
        {
            echo'
                <div class="alert alert-warning alert-white rounded">
                    <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
                    <div class="icon">
                        <i class="fa fa-warning"></i>
                    </div>
                    <strong>Attention !</strong>
                    '.$message.'
                </div>';
        }
        elseif($type == 'info')
        {
            echo'
                <div class="alert alert-info alert-white rounded">
                    <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
                    <div class="icon">
                        <i class="fa fa-info-circle"></i>
                    </div>
                    <strong></strong>
                    '.$message.'
                </div>';
        }
        elseif($type == 'danger')
        {
            echo'
                <div class="alert alert-danger alert-white rounded">
                    <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
                    <div class="icon">
                        <i class="fa fa-times-circle"></i>
                    </div>
                    <strong>Erreure !</strong>
                    '.$message.'
                </div>';
        }
    }
}