(* ************************************************************************** *)
(* Project: Karaokanime                                                       *)
(* Description: Pager module. Tools to create Ocsigen pages.                  *)
(* Author: db0 (db0company@gmail.com, http://db0.fr/)                         *)
(* Latest Version is on GitHub: https://github.com/db0company/Karaokanime     *)
(* ************************************************************************** *)

open Eliom_content
open Html5.D
open Eliom_parameter

(* ************************************************************************** *)
(* HTTP Header                                                                *)
(* ************************************************************************** *)

let http_header = 
  head (title
	  (pcdata (Karaokanime.title ^ " :: " ^ Karaokanime.slogan)))
    [(css_link ~uri:(make_uri (Eliom_service.static_dir ())
		       ["css";"style.css"]) ())]

(* ************************************************************************** *)
(* Header                                                                     *)
(* ************************************************************************** *)

let _ =
  Eliom_registration.Action.register
    ~service:Services.search
    (fun () (query) -> Lwt.return ())

let search_form =
  post_form Services.search
    (fun query_name ->
      [string_input
	  ~a:[a_class["text"]]
	  ~input_type:`Text
	  ~name:query_name
	  ();
       string_input
	 ~input_type:`Submit
	 ~value:"Recherche"
	 ()
      ]) ()

let display_header =
  let list_of_menu list =
    List.map
      (fun (service, name) ->
	a ~service:service [pcdata name] ())
      list in
  let menu_right = [(Services.faq, "F.A.Q.");
		    (Services.contact, "Contact");
		    (Services.upload, "Proposer un karaoké");
		    (Services.tutorial, "Tutoriaux")
		   ]
  and menu_left = [(Services.main, "Accueil");
		   (Services.list, "Liste des karaokés");
		   (Services.helpus, "Nous aider ?");
		   (Services.playlist, "Ma playlist")
		  ] in
  let logo =      div ~a:[a_class["logo"]]
       [a ~service:Services.main
	   [img ~alt:("Logo " ^ Karaokanime.title)
	       ~src:(make_uri ~service:(Eliom_service.static_dir ())
	               ["images";"interface";"logo.jpg"])
	       ()
	   ] ()] in
  (* todo: arrange this alphabet*)
  let alphabet = ['~'; 'a'; 'b'; 'c'; 'd'; 'e'; 'f'; 'g'; 'h'; 'i';
		  'j'; 'k'; 'l'; 'm'; 'n'; 'o'; 'p'; 'q'; 'r'; 's';
		  't'; 'u'; 'v'; 'w'; 'x'; 'y'; 'z'] in
  div
    ~a:[a_class["header"]]
    [div ~a:[a_class["menu"]]
	[search_form;
	 div ~a:[a_class["right_menu"]]
	   (list_of_menu menu_right);
	 div ~a:[a_class["left_menu"]]
	   (list_of_menu menu_left)
	];
     logo;
     div ~a:[a_class["alphabet"]]
       (List.map
	  (fun letter ->
	    let str = Char.escaped letter in
	    a ~service:Services.list_query
	      [pcdata str] str) alphabet);
     img ~alt:("test pub")
       ~src:(make_uri ~service:(Eliom_service.static_dir ())
	       ["images";"pub.jpg"])
       ()
    ]

(* ************************************************************************** *)
(* Footer                                                                     *)
(* ************************************************************************** *)

let display_footer = div ~a:[a_class["footer"]] []

(* ************************************************************************** *)
(* Pager                                                                      *)
(* ************************************************************************** *)

(* create : "Html body content" list -> "Html content"                        *)
(* Return a page correctly formatted with header and footer                   *)
(* containing the given body                                                  *)
let create body_content =
  (html http_header
     (body [div ~a:[a_class["main"]]
	       [display_header;
		div ~a:[a_class ["page"]] body_content;
		display_footer]
	   ]))

