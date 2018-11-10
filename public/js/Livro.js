function AddComboAutores(){
    $(".autors").append("<br><div class=\"row\">\n" +
        "                                    <div class=\"col-sm-6\">\n" +
        "                                        <!--<input type=\"text\" class=\"form-control\" name=\"autores\" id=\"autores\" placeholder=\"Informe os autores do livro\">-->\n" +
        "                                        <select class=\"form-control\" id=\"cmbAutores\" style=\"margin-left: 15px;\">\n" +
        "                                            <option>José Saramago</option>\n" +
        "                                            <option>Bukowski</option>\n" +
        "                                        </select>\n" +
        "                                    </div>" +
        "</div>")
}
