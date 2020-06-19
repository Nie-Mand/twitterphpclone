function check1() {
  username = add.username.value
  password = add.password.value
  content = add.content.value
  if (username.length < 6 || username.length > 15) return false
  if (password.length < 6 || password.length > 15) return false
  if (content.length < 50 || content.length > 250) return false
  return true
}

function check2() {
  username = add.username.value
  password = add.password.value
  name = add.name.value
  check_password = add.check_password.value
  if (username.length < 6 || username.length > 15) return false
  if (password.length < 6 || password.length > 15) return false
  if (name.length < 6 || name.length > 20) return false
  if (password != check_password) return false
  return true
}
