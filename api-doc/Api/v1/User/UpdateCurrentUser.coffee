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
    "access_token": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYjA0NTY5NTFjODdkOGE3MzViY2YzM2QxMGVmOTA0YjhjNWJlOGQ5MTI3YjQ5OTllMTE3YzA5ZjJjNWQ0MTdmODYxZTU5MGI0ZjQyNTc0MjAiLCJpYXQiOjE1NzU5MTk4NjMsIm5iZiI6MTU3NTkxOTg2MywiZXhwIjoxNjA3NTQyMjYzLCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.XUzsRkbbCkEI1smBUuciNhnnGXOiOlMfvkV2Eq0Er_9ieJQntm6OqxetMKv73nWkaMz7DpWZSfUHRAVAlI5nGhfRIZCe-btNxfGDrzqDYGc4k0TeNrRZsa_RNAmuMayPde5jfsvv2j6Jgsr-WB4m_UFKlK3TzozDw2Q1acySwng1zCpIrWLQSdEcfW2LnPhgPZi3jBs5BGe98jqjKLHuH9R-HaOCDnanYmvNzyWZ5L593MgsDckTXE6H2bRIuEzyn4RsurVVAp47kn-XjENtYsc27cIUWT7DUlGeOgR3U-MdQ5vljEJAXd48kt7JQOEWvoLMSVqsboF7squBwCztnzIlkeqUCVuWnPO2AgMiyaAjKnVegozKt-wOfJn0bTac7lcSqUTr4vlGMRI0WlZ_cgfbN2UpoPBt8Xhj2y75w0JUMsUO3xGjqEQw6ebOSSHC9htEtOzY95enaAUTXUalVlmQlvRzkf3QZLOSVrZY8MrWTitW_b6QJ4QMF6DLNP9OlOZoosyb4YjCiZaRYBKQYgZ4X_m8ig-d-_OKrg2jboeoxmSHSnw43pFp-PPoC6j0n27CxdGZz2HAv4S7akeyBGxw4qGlPGA5ylxYMmnK1zh0gQKmSlF21NmXMuTeUOV2-4vBh-mKMV_H-UMBJ0Y6zvfwkksZHnkQ751D08txfpY"
}

@apiErrorExample {json} 400 Bad Request:
HTTP/1.1 Error 400 Bad Request
{
    "errors": {
        "email": "The email field is required.",
        "password": "The password field is required."
    }
}

@apiExample {json} Request-Example:
HTTP/1.1 200 OK
{
    "name": "vlad",
    "email": "chaly95@gmail.com",
    "password": "1Qwerty@",
    "password_confirmation": "1Qwerty@"
}
###
###
