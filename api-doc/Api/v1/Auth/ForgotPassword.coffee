###
@apiVersion 1.0.0
@api {post} auth/forgot-password Forgot Password
@apiDescription This method should forgot password for user
@apiName Forgot Password
@apiGroup Auth

@apiUse RequestModel
@apiUse HeadersModel
@apiUse HeaderPost

@apiBody {String} email <code>required</code> max:100 chars | exists:users

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
