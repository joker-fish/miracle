### 请严格按照文档规范填写注释（仅支持json格式返回数据）
 + PHP >= 5.4

### 使用方法：
* 引入Miracle.php
```
include (EXTEND_PATH.'miracle/Miracle.php');
$res = (new \Miracle)->index($path)->markdownText($domain)->setMarkdown($path, $name);
```
方法参数说明：
* #### index (string $path[需生成md文件的文件路径])
* #### markdownText (string $domain[域名])
* #### setMarkdown (string $path[md文件保存路径], string $name[保存文件名])

### 注释语法：
```
/**
     * @description 订单信息
     * @url /test/index.html
     * @method post
     * @param string name 名称
     * @param string age 年龄
     * @faild ^[{
                    "code": "101",
                    "msg": "提现金额不为1000整数"
                },
                {
                "code": "102",
                "msg": "提现余额不足"
                }]
     * @success ^{
                    "order_id": "119",
                    "code_id": "161",
                    "code": "202487648",
                    "lab": "cdda",
                    "lab_lis": {
                        "product_id": "1",
                        "product_name": "\u8840\u5e38\u89c424\u9879"
                    }
                }
     * @instructions
     * @var string order_id 订单id
     * @var string code_id 条码id
     * @var array lab_lis 实验室产品信息
     * @var string product_id 产品id
     * @var string product_name 产品名称
     */
```
参数说明：
* @description 接口描述
* @url 接口请求地址
* @method 请求方法
* @param 请求参数
* @faild 失败事例
* @success 成功事例
* @instructions 数据说明
* @var 返回参数

# 文档生成后示例:

## 业务员奖励提现余额

1.请求地址：http://xxx.com/salesman/referees/referees.html

2.请求方式：get

3.请求参数：

|名称|类型|说明|
| --- |:---:|---:|

成功：

```
{
    "code": "200",
    "msg": "查询成功",
    "data": {
        "num": 809.9,
        "get": 809.9
    }
}
```


4.数据说明：

|名称|类型|说明|
| --- |:---:|---:|
|num|float|可提现奖励余额|
|get|float|累计提现|

## 业务员奖励提现记录

1.请求地址：http://xxx.com/salesman/referees/log.html

2.请求方式：get

3.请求参数：

|名称|类型|说明|
| --- |:---:|---:|
|num|int|每页展示条数|
|page|int|页码|

成功：

```
{
    "code": "200",
    "msg": "查询成功",
    "data": [
        {
            "time": "2019-01-01 00:00",
            "discount": 100,
            "discount_balance": 100
        }
    ]
}
```


4.数据说明：

|名称|类型|说明|
| --- |:---:|---:|
|time|string|提现时间|
|discount|float|提现金额|
|discount_balance|float|提现时奖励余额|

## 业务员推荐人收益记录

1.请求地址：http://xxx.com/salesman/referees/RefereesLog.html

2.请求方式：get

3.请求参数：

|名称|类型|说明|
| --- |:---:|---:|
|num|int|每页展示条数|
|page|int|页码|

成功：

```
{
    "code": "200",
    "msg": "查询成功",
    "data": [
        {
            "name": "张三",
            "create_time": "2019-01-02",
            "address": "四川省,成都市,金牛区,金牛区",
            "money": 9900.99
        }
    ]
}
```


4.数据说明：

|名称|类型|说明|
| --- |:---:|---:|
|name|string|推荐人名称|
|create_time|string|注册时间|
|address|string|市场区域|
|money|float|提成收益|

## 提现

1.请求地址：http://xxx.com/salesman/referees/discount.html

2.请求方式：post

3.请求参数：

|名称|类型|说明|
| --- |:---:|---:|
|price|float|提现金额|

失败：

```
[
    {
        "code": "101",
        "msg": "提现金额不为1000整数"
    },
    {
        "code": "102",
        "msg": "提现余额不足"
    }
]
```


成功：

```
{
    "code": "200",
    "msg": "查询成功",
    "data": {
        "get": 2000,
        "remain": 203,
        "discount": 200000
    }
}
```


4.数据说明：

|名称|类型|说明|
| --- |:---:|---:|
|get|int|提现金额|
|remain|int|提成余额|
|discount|int|抵扣金余额|

