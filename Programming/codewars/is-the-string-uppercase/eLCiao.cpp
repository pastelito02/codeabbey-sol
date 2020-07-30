#include <string>
#include <algorithm>

bool is_uppercase(const std::string &s) {
  return std::none_of(s.begin(), s.end(), islower);
}
