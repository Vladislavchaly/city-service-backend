###
@apiVersion 1.0.0
@api {get} referral-tokens/ Get referral tokens
@apiDescription This method should getting referral tokens.
@apiName Get
@apiGroup Referral Tokens

@apiUse RequestModel
@apiUse HeadersModel
@apiUse HeaderPost
@apiUse SessionModel

@apiSuccessExample {json} Success-Example:
HTTP/1.1 200 OK
{
    "id": 17,
    "user_id": 20,
    "token": "hfuGW",
    "created_at": "2022-08-02T07:08:15.000000Z",
    "updated_at": "2022-08-02T07:08:15.000000Z"
}

###
