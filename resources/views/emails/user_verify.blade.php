Hola {{  $user->name  }}Para completar el registro por favor verifica tu cuenta.{{  route('user.verify', $user->verification_token)  }}