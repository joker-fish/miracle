<?php

class Referees
{
    /**
     * @description 业务员奖励提现余额
     * @url /salesman/referees/referees.html
     * @method get
     * @success ^{
                    "code": "200",
                    "msg": "查询成功",
                    "data": {
                        "num": 809.9,
                        "get": 809.9
                    }
                }
     * @instructions
     * @var float num 可提现奖励余额
     * @var float get 累计提现
     */
    public function getReferess()
    {
    }
    /**
     * @description 业务员奖励提现记录
     * @url /salesman/referees/log.html
     * @method get
     * @param int num 每页展示条数
     * @param int page 页码
     * @success ^{
                    "code": "200",
                    "msg": "查询成功",
                    "data": [{
                        "time": "2019-01-01 00:00",
                        "discount": 100,
                        "discount_balance": 100
                    }]
                }
     * @instructions
     * @var string time 提现时间
     * @var float discount 提现金额
     * @var float discount_balance 提现时奖励余额
     */
    public function getGetLog()
    {
    }
    /**
     * @description 业务员推荐人收益记录
     * @url /salesman/referees/RefereesLog.html
     * @method get
     * @param int num 每页展示条数
     * @param int page 页码
     * @success ^{
                    "code": "200",
                    "msg": "查询成功",
                    "data": [{
                        "name": "张三",
                        "create_time": "2019-01-02",
                        "address": "四川省,成都市,金牛区,金牛区",
                        "money": 9900.99
                    }]
                }
     * @instructions
     * @var string name 推荐人名称
     * @var string create_time 注册时间
     * @var string address 市场区域
     * @var float money 提成收益
     */
    public function getRefereesLog()
    {
    }
    /**
     * @description 提现
     * @url /salesman/referees/discount.html
     * @method post
     * @param float price 提现金额
     * @faild ^[{
                    "code": "101",
                    "msg": "提现金额不为1000整数"
                },
                {
                    "code": "102",
                    "msg": "提现余额不足"
                }]
     * @success ^{
                    "code": "200",
                    "msg": "查询成功",
                    "data": {
                        "get": 2000,
                        "remain": 203,
                        "discount": 200000
                    }
                }
     * @instructions
     * @var int get 提现金额
     * @var int remain 提成余额
     * @var int discount 抵扣金余额
     */
    public function postGetDiscount()
    {
    }
}