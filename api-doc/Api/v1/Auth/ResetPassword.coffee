###
@apiVersion 1.0.0
@api {post} auth/reset-password Reset Password
@apiDescription This method should reset password for user
@apiName Reset Password
@apiGroup Auth

@apiUse RequestModel
@apiUse HeadersModel
@apiUse HeaderPost

@apiBody {String} token <code>required</code>
@apiBody {String} email <code>required</code> max:100 chars | unique:users
@apiBody {String} password <code>required</code> min:6 chars | max:40 chars
@apiBody {String} password_confirmation <code>required</code> min:6 chars | max:40 chars

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
