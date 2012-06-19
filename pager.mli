(* ************************************************************************** *)
(* Project: Karaokanime                                                       *)
(* Description: Pager module. Tools to create Ocsigen pages.                  *)
(* Author: db0 (db0company@gmail.com, http://db0.fr/)                         *)
(* Latest Version is on GitHub: https://github.com/db0company/Karaokanime     *)
(* ************************************************************************** *)

(* Return a page correctly formatted with header and footer                   *)
(* containing the given body                                                  *)
val create :
  [< Html5_types.body_content_fun ] Eliom_content.Html5.D.elt list ->
  [> `Html ] Eliom_content.Html5.D.elt
