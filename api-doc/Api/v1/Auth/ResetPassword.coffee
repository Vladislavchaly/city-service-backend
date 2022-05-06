###
@apiVersion 1.0.0
@api {post} v1/auth/reset-password Reset Password
@apiDescription This method should reset password for user
@apiName Reset Password
@apiGroup Auth

@apiUse RequestModel
@apiUse HeadersModel
@apiUse HeaderPost

@apiParam {String} email <code>required</code> max:100 chars | exists:users

@apiSuccessExample {json} Success-Example:
HTTP/1.1 200 OK
{}

@apiErrorExample {json} 400 Bad Request:
HTTP/1.1 Error 400 Bad Request
{
    "errors": {
        "email": "The email field is required."
    }
}
###
