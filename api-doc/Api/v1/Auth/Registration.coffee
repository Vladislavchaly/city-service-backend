###
@apiVersion 1.0.0
@api {post} auth/registration Registration
@apiDescription This method should registration new user
@apiName Registration
@apiGroup Auth

@apiUse RequestModel
@apiUse HeadersModel
@apiUse HeaderPost

@apiBody {String} name <code>required</code>
@apiBody {String} email <code>required</code> max:100 chars | unique:users
@apiBody {String} password <code>required</code> min:6 chars | max:40 chars
@apiBody {String} password_confirmation <code>required</code> min:6 chars | max:40 chars

@apiSuccessExample {json} Success-Example:
HTTP/1.1 200 OK
{
    "token": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiODc0ZDIzNmQyNTc3YzM0OGYzYTZjMDE2N2RmMzkwMjZhOTE4NWUyNzI4OTk0NjUwZjE4ZjYzOGM4OTI1YmNmNjFlNWMyYzc1NzUwNjZmY2MiLCJpYXQiOiIxNjEzOTQ5NDY3Ljc5ODc2MSIsIm5iZiI6IjE2MTM5NDk0NjcuNzk4NzY2IiwiZXhwIjoiMTY0NTQ4NTQ2Ny43OTUyNzgiLCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.bczdBh19J9WHcaWmzmvVtBBkG0R2UfeZQMVz16gBjfIfZHO8qEZeVScwsfXAZ0YNUOyjL2WF2UZJsaXGte91aCqaQBBlL3ZmWA-bkyMKtPhp6ggdrDyr_AJCFv7mPzCxhLz6zijO1g1U3fy0GaRxr6Ep7aFHG0iTtrfyp1qqForC_HPVsYFdR8cr6GZSzvN4qLeGNLeSxqEVsv4yg7b07oM2N2y5vCIRLxqRr-ANUBL0V5MJctZvzxePTYMwwpCLwuAw5kF5g3QKMNaShEcWYdU2ugY2Ac0WGgGks4cG_3vyj0aB3_6VoGFCdVPPb2iX6plsgmOLt-0n7CCCsYp522vetjaiMcAKphsuBupsjQuy9jIYZoXajG8b2WMfZlNsVeupsOGChbqFS_Ylu54SBGNuFA4T5Z2NJ-FFmLopnJWTK6X3OG2BTGWns1L4CbPhRvJkA1UF8fFY4P2VSBK7RgMKA2DW3Ez6q5vlZsTZJ7B48zpMILWpwpTVL0XGT91CHI6yozPf4R2Kn5FVvqawfgIuLhiBKM81U4jMPnOpkKQ9sOiMWkRj7K61WTNs3nUfVIIHZVBym02VZ1OudUQfxlVnohTHxwb2OXCVCh935uXoDFVafbt5Pwe-4EqhvKSfd0Yg9A9Orc6OxphrOldtOA0k6uGjXmEvaFMAcx3kyKA"
}

@apiErrorExample {json} 400 Bad Request:
HTTP/1.1 Error 400 Bad Request
{
    "errors": {
        "email": "The email field is required.",
        "email": "The email must be a valid email address.",
        "email": "The email has already been taken."
        "password": "The password field is required."
        "password": "The password confirmation does not match.",
        "password_confirmation": "The password confirmation must be at least 6 characters."
    }
}
###
