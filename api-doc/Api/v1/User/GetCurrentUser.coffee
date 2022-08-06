###
@apiVersion 1.0.0
@api {get} users/me Get Me
@apiDescription This method should getting current user.
@apiName Get Me
@apiGroup User

@apiUse RequestModel
@apiUse HeadersModel
@apiUse HeaderPost
@apiUse SessionModel

@apiSuccessExample {json} Success-Example:
HTTP/1.1 200 OK
{
    "id": 20,
    "name": "Vlad",
    "email": "chaly95@gmail.com",
    "email_verified_at": null,
    "role_id": 4,
    "related_id": null,
    "status": true,
    "created_at": "2022-08-02T07:08:15.000000Z",
    "updated_at": "2022-08-05T20:02:23.000000Z"
}
###
