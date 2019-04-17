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
```
参数说明：
* @description 接口描述
* @url 接口请求地址
* @method 请求方法
* @param 请求参数
* @return 返回数据格式
* @var 返回参数
* @example 返回数据示例

# 文档生成后示例:

## 订单信息

2.请求地址：www.baidu.com/test/index.html

3.请求方式：post

4.请求参数：

|名称|类型|说明|
| --- |:---:|---:|
|name|string|名称|
|age|string|年龄|

5.数据说明：

|名称|类型|说明|
| --- |:---:|---:|
|order_id|string|订单id|
|code_id|string|条码id|
|lab_lis|array|实验室产品信息↓|
|product_id|string|产品id|
|product_name|string|产品名称|

例：

```
{
    "order_id": "119",
    "code_id": "161",
    "code": "202487648",
    "lab": "cdda",
    "lab_lis": {
        "product_id": "1",
        "product_name": "血常规24项"
    }
}
```
## 测试

2.请求地址：www.baidu.com/test/test.html

3.请求方式：post

4.请求参数：

|名称|类型|说明|
| --- |:---:|---:|
|name|string|名称|
|age|string|年龄|

5.数据说明：

|名称|类型|说明|
| --- |:---:|---:|
|order_id|string|订单id|
|code_id|string|条码id|
|lab_lis|array|实验室产品信息↓|
|product_id|string|产品id|
|product_name|string|产品名称|



