if [[ ! -o interactive ]]; then
    return
fi

compctl -K _example example

_example() {
  local word words completions
  read -cA words
  word="${words[2]}"

  if [ "${#words}" -eq 2 ]; then
    completions="$(example commands)"
  else
    completions="$(example completions "${word}")"
  fi

  reply=("${(ps:\n:)completions}")
}
