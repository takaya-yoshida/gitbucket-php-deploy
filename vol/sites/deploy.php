<?php

$payload = '';
if ( ! isset($_POST['payload']) )
{
	exit('NG');
}

$payload = json_decode($_POST['payload']);
$repo_dir = './'.$payload->repository->name;

if ( ! is_dir($repo_dir) )
{
	exec('git clone '.$payload->clone_url);
}

exec('git -C '.$repo_dir.' pull');
