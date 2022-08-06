###
@apiVersion 1.0.0
@api {post} users/update Update Me
@apiDescription This method should updating current user.
@apiName Update Me
@apiGroup User

@apiUse RequestModel
@apiUse HeadersModel
@apiUse HeaderPost
@apiUse SessionModel



@apiBody {String} name <code>required</code>
@apiBody {String} email <code>required</code> max:100 chars | unique:users
@apiBody {String} password <code>required</code> min:6 chars | max:40 chars
@apiBody {String} password_confirmation <code>required</code> min:6 chars | max:40 chars
@apiSuccessExample {json} Success-Example:
HTTP/1.1 200 OK
{
    1
}
###
