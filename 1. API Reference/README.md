# EZVIZ HTTP Interface

- Links
    - https://open.ys7.com/doc/en/HTTP/user-en.html
    - https://github.com/BaQs/pyEzviz
    - https://www.home-assistant.io/integrations/ezviz/
    - https://ip.taobao.com/
    - https://open.ys7.com/cn
    - https://open.ys7.com/doc/zh/readme/serial.html

The web API interface for EZVIZ devices

---
### 1. Get accessToken via appKey and secret

This API is used for the admin user to get the accessToken.

POST

|Parameter Name|Type|Description|Required|
| :------------| :------------ | :------------ | :------------ |
|appKey|String|appKey|Yes|
|appSecret|String|appSecret|Yes|

```
https://apiieu.ezvizlife.com/v3/users/login

https://apiisa.ezvizlife.com/v3/users/login

https://pusheu.ezvizlife.com/v3/users/login

https://pushsa.ezvizlife.com/v3/users/login

https://ieu.ezvizlife.com/v3/users/login

https://open.ezvizlife.com/api/lapp/token/get/?appKey=9mqitppidgce4y8n54ranvyqc9fjtsrl&appSecret=096e76501644989b63ba0016ec5776

https://openauth.ezvizlife.com/oauth/ddns/01ae5e05f76b2241ff39d0b2c0c976f7?areaId=437&response_type=token&client_type=19

https://openauth.ezvizlife.com/doLogin?account=user&password=password&from=asdasd&r=100000000000000000000&returnUrl=default

https://ieu.ezvizlife.com/static/avatar/01ae5e05f76b2241ff39d0b2c0c976f7?1599212370157

https://ieu.ezvizlife.com/v3/users/login

//https://openauth.ezvizlife.com/oauth/ddns/%7BappKey%7D?areaId={areaId}&response_type={response_type}&client_type={client_type}&bundleId={bundleId}
//appKey=9mqitppidgce4y8n54ranvyqc9fjtsrl&appSecret=096e76501644989b63ba0016ec5776
//https://open.ezvizlife.com/api/lapp/token/get
//https://apiieu.ezvizlife.com/v3/users/login
//https://ieu.ezvizlife.com/static/avatar/01ae5e05f76b2241ff39d0b2c0c976f7?1599212370157
//pusheu.ezvizlife.com

```


- HTTP Request Message

```
POST /api/lapp/token/get HTTP/1.1
Host: open.ezvizlife.com
Content-Type: application/x-www-form-urlencoded
appKey=9mqitppidgce4y8n54ranvyqc9fjtsrl&appSecret=096e76501644989b63ba0016ec5776
```

- Return Data

```JSON
{
   "data":{
      "accessToken":"at.7jrcjmna8qnqg8d3dgnzs87m4v2dme3l-32enpqgusd-1jvdfe4-uxo15ik0s",
      "expireTime":1470810222045,
      "areaDomain":"https://iusopen.ezvizlife.com"
   },
   "code":"200",
   "msg":"Operating succeeded!"
}
```

- EXAMPLE CODE

```JS

```

### 1. Gets the list of area ID's

The area ID of registered users. Call API /api/lapp/area/list to get all the area ID's.

POST

|Parameter Name|Type|Description|Required|
| :------------| :------------ | :------------ | :------------ |
|null|null|null|null|
|null|null|null|null|

```
https://open.ezvizlife.com/api/lapp/area/list
```


|null|null|null|null|
| :------------| :------------ | :------------ | :------------ |
|null|null|null|null|
|null|null|null|null|

### C# example

```C#
try
{
    using (HttpClient client = new HttpClient())
    {
        //Add Default Request Headers
        //client.DefaultRequestHeaders.Add("Authorization", "Bearer token");
        HttpContent stringContent = new FormUrlEncodedContent(new[]
        {
            new KeyValuePair<string, string>("username", "lvkd45d"),
            new KeyValuePair<string, string>("appKey", "9mqitppidgce4y8n54ranvyqc9fjtsrl"),
            new KeyValuePair<string, string>("appSecret", "096e76501644989b63ba0016ec5776"),
        });
        using (var response = await client.PostAsync("https://open.ezvizlife.com/api/lapp/token/get", stringContent))
        {
            using (HttpContent content = response.Content)
            {
                //Read the result and display in Textbox
                string result = await content.ReadAsStringAsync();//Result string JSON
                string reasonPhrase = response.ReasonPhrase;//Reason OK, FAIL etc.
                LogsrichTextBox.AppendText(result + Environment.NewLine);
                LogsrichTextBox.AppendText("Json => " + reasonPhrase + Environment.NewLine);
                JObject R = JObject.Parse(result);
                string code = (string)R["code"];
                string msg = (string)R["msg"];
                string accessToken = (string)R["data"]["accessToken"];
                //authAddress = https://open.ezvizlife.com
                //platformAddress = https://ieuopen.ezvizlife.com
            }
        }
    }
}
catch (Exception ex)
{
    MessageBox.Show(ex.Message, "Could not test API", MessageBoxButtons.OK, MessageBoxIcon.Error);
    Logger.WriteLine(" *** Error:" + ex.Message + " [MainForm] ***");
    return;
}
```