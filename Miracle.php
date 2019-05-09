<?php

Class Miracle
{
    private $arr = [];

    private $domain = '';

    private $description = '## ';

    private $url = '1.请求地址：';

    private $method = '2.请求方式：';

    private $param = '3.请求参数：'.PHP_EOL.PHP_EOL.'|名称|类型|说明|'.PHP_EOL.'| --- |:---:|---:|'.PHP_EOL;

    private $return = '4.数据说明：'.PHP_EOL.PHP_EOL.'|名称|类型|说明|'.PHP_EOL.'| --- |:---:|---:|'.PHP_EOL;

    private $markdwon = '';

    public function index($path='')
    {
//        $path =  dirname(__FILE__) . '/example/Test.php';
        $this->getClass(file_get_contents($path), 0);
        return $this;
    }
    private function getClass($class, $site)
    {
        $start = strpos($class, '/**', $site);
        if ($start != false){
            $end = strpos($class, '*/', $start);
            $this->arr[] = explode('*', substr($class, $start, $end-$start));
            $this->getClass($class, $end);
        }
    }
    public function markdownText($domain)
    {
        foreach($this->arr as $key=>$value){
            $str = '';
            foreach($value as $val){
                $arr = explode(' ', trim($val));
                if ($arr[0] == '@description'){
                    $str .= $this->description.$arr[1].PHP_EOL.PHP_EOL;
                }
                if (trim($arr[0]) == '@url'){
                    $str .= $this->url.$domain.$arr[1].PHP_EOL.PHP_EOL;
                }
                if (trim($arr[0]) == '@method'){
                    $str .= $this->method.$arr[1].PHP_EOL.PHP_EOL.$this->param;
                }
                if (trim($arr[0]) == '@param'){
                    $str .= "|$arr[2]|$arr[1]|$arr[3]|".PHP_EOL;
                }
                if (trim($arr[0]) == '@faild'){
                    $arr = explode('^', trim($val));
                    if (json_decode($arr[1], true) == NULL){
                        echo 'json格式不正确'.$arr[1];
                    }
                    $str .= PHP_EOL.'失败：'.PHP_EOL.PHP_EOL.'```'.PHP_EOL.json_encode(json_decode($arr[1], true), JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT).PHP_EOL.'```'.PHP_EOL.PHP_EOL;
                }
                if (trim($arr[0] == '@success')){
                    $arr = explode('^', trim($val));
                    if (json_decode($arr[1], true) == NULL){
                        echo 'json格式不正确'.$arr[1];
                    }
                    $str .= PHP_EOL.'成功：'.PHP_EOL.PHP_EOL.'```'.PHP_EOL.json_encode(json_decode($arr[1], true), JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT).PHP_EOL.'```'.PHP_EOL.PHP_EOL;
                }
                if (trim($arr[0]) == '@instructions'){
                    $str .= PHP_EOL.$this->return;
                }
                if (trim($arr[0]) == '@var'){
                    if ($arr[1] == 'array'){
                        $str .= "|$arr[2]|$arr[1]|$arr[3]↓|".PHP_EOL;
                        continue;
                    }
                    $str .= "|$arr[2]|$arr[1]|$arr[3]|".PHP_EOL;
                }
            }
            $this->markdwon .= $str.PHP_EOL;
        }
        return $this;
    }
    public function setMarkdown($path, $name)
    {
//        dump($path.$name);die();
        file_put_contents($path.$name, $this->markdwon);
    }
}