(* ************************************************************************** *)
(* Project: Karaokanime                                                       *)
(* Description: List of services                                              *)
(* Author: db0 (db0company@gmail.com, http://db0.fr/)                         *)
(* Latest Version is on GitHub: https://github.com/db0company/Karaokanime     *)
(* ************************************************************************** *)

open Eliom_content
open Html5.D
open Eliom_parameter

module Karaokapp =
  Eliom_registration.App
    (struct
      let application_name = "karaokanime"
     end)

let main =
  Eliom_service.service
    ~path:[""]
    ~get_params:unit
    ()

let search =
  Eliom_service.post_service
    ~fallback:main
    ~post_params:(string "query")
    ()

let faq =
  Eliom_service.service
    ~path:["faq"]
    ~get_params:unit (* todo: question number? *)
    ()

let contact =
  Eliom_service.service
    ~path:["contact"]
    ~get_params:unit
    ()

let upload =
  Eliom_service.service
    ~path:["upload"]
    ~get_params:unit
    ()

let tutorial =
  Eliom_service.service
    ~path:["tutorial"]
    ~get_params:unit
    ()

let list =
  Eliom_service.service
    ~path:["list";""]
    ~get_params:unit
    ()

let list_query =
  Eliom_service.service
    ~path:["list"]
    ~get_params:(suffix (string "query"))
    ()

let helpus =
  Eliom_service.service
    ~path:["helpus"]
    ~get_params:unit
    ()

let playlist =
  Eliom_service.service
    ~path:["playlist"]
    ~get_params:unit
    ()

