<?php

Class Test
{
    /**
     * @description 订单信息
     * @url /test/index.html
     * @method post
     * @param string name 名称
     * @param string age 年龄
     * @return json
     * @var string order_id 订单id
     * @var string code_id 条码id
     * @var array lab_lis 实验室产品信息
     * @var string product_id 产品id
     * @var string product_name 产品名称
     * @example ^{
                    "order_id": "119",
                    "code_id": "161",
                    "code": "202487648",
                    "lab": "cdda",
                    "lab_lis": {
                        "product_id": "1",
                        "product_name": "\u8840\u5e38\u89c424\u9879"
                    }
                }
     */
    public function index()
    {

    }
    /**
     * @description 测试
     * @url /test/test.html
     * @method post
     * @param string name 名称
     * @param string age 年龄
     * @return json
     * @var string order_id 订单id
     * @var string code_id 条码id
     * @var array lab_lis 实验室产品信息
     * @var string product_id 产品id
     * @var string product_name 产品名称
     */
    public function test()
    {

    }
}