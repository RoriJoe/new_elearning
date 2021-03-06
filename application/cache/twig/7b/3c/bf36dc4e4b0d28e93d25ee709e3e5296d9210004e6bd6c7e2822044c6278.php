<?php

/* admin_siswa/filter.html */
class __TwigTemplate_7b3cbf36dc4e4b0d28e93d25ee709e3e5296d9210004e6bd6c7e2822044c6278 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-private.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-private.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"module\">
    <div class=\"module-head\">
        <h3>";
        // line 6
        echo (isset($context["module_title"]) ? $context["module_title"] : null);
        echo "</h3>
    </div>
    <div class=\"module-body\">
        ";
        // line 9
        echo get_flashdata("siswa");
        echo "

        <div class=\"row-fluid\">
        <div class=\"span7\">
            <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, site_url("admin/siswa/add/1"), "html", null, true);
        echo "\" class=\"btn btn-primary\">Tambah Siswa</a>
        </div>

        <div class=\"span5\">
            <div class=\"btn-group\">
                ";
        // line 18
        echo anchor("admin/siswa/list/1", "Aktif", array("class" => "btn btn-default"));
        echo "
                ";
        // line 19
        echo anchor("admin/siswa/list/0", "Pending", array("class" => "btn btn-default"));
        echo "
                ";
        // line 20
        echo anchor("admin/siswa/list/2", "Blocking", array("class" => "btn btn-default"));
        echo "
                ";
        // line 21
        echo anchor("admin/siswa/list/3", "Alumni", array("class" => "btn btn-default"));
        echo "
                ";
        // line 22
        echo anchor("admin/siswa/filter", "<i class=\"icon-search\" style=\"line-height: 0px;\"></i> Filter", array("class" => "btn btn-info"));
        echo "
            </div>
        </div>
        </div>

        <br>

        <div class=\"bs-callout bs-callout-info\">
            <b><a id=\"button\" href=\"javascript:void(0)\">PARAMETER PENCARIAN</a></b>
            ";
        // line 31
        echo form_open("admin/siswa/filter");
        echo "
            <table class=\"table table-condensed\" id=\"form-search\">
                <tr>
                    <th width=\"20%\">NIS</th>
                    <td>
                        <input type=\"text\" name=\"nis\" class=\"span2\" style=\"margin-bottom:0px;\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, set_value("nis", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "nis", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "nis")) : (""))), "html", null, true);
        echo "\">
                    </td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>
                        <input type=\"text\" name=\"nama\" class=\"span4\" style=\"margin-bottom:0px;\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, set_value("nama", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "nama", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "nama")) : (""))), "html", null, true);
        echo "\">
                    </td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>
                        <p style=\"margin-top:0px; margin-bottom:5px;\">
                        <label class=\"checkbox inline\">
                            <input type=\"checkbox\" name=\"jenis_kelamin[]\" value=\"Laki-laki\" ";
        // line 50
        echo twig_escape_filter($this->env, set_checkbox("jenis_kelamin[]", "Laki-laki", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "jenis_kelamin", array(), "any", true, true) && twig_in_filter("Laki-laki", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "jenis_kelamin")))) ? (true) : (false))), "html", null, true);
        echo "> Laki-laki
                        </label>
                        <label class=\"checkbox inline\">
                            <input type=\"checkbox\" name=\"jenis_kelamin[]\" value=\"Perempuan\" ";
        // line 53
        echo twig_escape_filter($this->env, set_checkbox("jenis_kelamin[]", "Perempuan", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "jenis_kelamin", array(), "any", true, true) && twig_in_filter("Perempuan", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "jenis_kelamin")))) ? (true) : (false))), "html", null, true);
        echo "> Perempuan
                        </label>
                        </p>
                    </td>
                <tr>
                <tr>
                    <th>Tahun Masuk</th>
                    <td>
                        <input type=\"text\" name=\"tahun_masuk\" maxlength=\"4\" style=\"width:15%;margin-bottom:0px;\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, set_value("tahun_masuk", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "tahun_masuk", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "tahun_masuk")) : (""))), "html", null, true);
        echo "\">
                    </td>
                <tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>
                        <input type=\"text\" name=\"tempat_lahir\" class=\"span3\" style=\"margin-bottom:0px;\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, set_value("tempat_lahir", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "tempat_lahir", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "tempat_lahir")) : (""))), "html", null, true);
        echo "\">
                    </td>
                <tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>
                        <select class=\"span2\" style=\"width: 10%;\" name=\"tgl_lahir\">
                            <option value=\"\">Tgl</option>
                            ";
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 76
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_select("tgl_lahir", (isset($context["i"]) ? $context["i"] : null), ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "tgl_lahir", array(), "any", true, true) && ((isset($context["i"]) ? $context["i"] : null) == $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "tgl_lahir")))) ? (true) : (false))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                        </select>
                        <select class=\"span2\" style=\"width: 17%;\" name=\"bln_lahir\">
                            <option value=\"\">Bulan</option>
                            ";
        // line 81
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 82
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_select("bln_lahir", (isset($context["i"]) ? $context["i"] : null), ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "bln_lahir", array(), "any", true, true) && ((isset($context["i"]) ? $context["i"] : null) == $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "bln_lahir")))) ? (true) : (false))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, get_indo_bulan((isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                        </select>
                        <input type=\"text\" name=\"thn_lahir\" class=\"span1\" maxlength=\"4\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, set_value("thn_lahir", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "thn_lahir", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "thn_lahir")) : (""))), "html", null, true);
        echo "\" placeholder=\"Tahun\">
                    </td>
                <tr>
                <tr>
                    <th>Alamat</th>
                    <td>
                        <input type=\"text\" name=\"alamat\" class=\"span4\" style=\"margin-bottom:0px;\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, set_value("alamat", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "alamat", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "alamat")) : (""))), "html", null, true);
        echo "\">
                    </td>
                <tr>
                <tr>
                    <th>Agama</th>
                    <td>
                        <p style=\"margin-top:0px; margin-bottom:5px;\">
                            <label class=\"checkbox inline\"><input type=\"checkbox\" name=\"agama[]\" value=\"ISLAM\" ";
        // line 98
        echo twig_escape_filter($this->env, set_checkbox("agama[]", "ISLAM", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "agama", array(), "any", true, true) && twig_in_filter("ISLAM", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "agama")))) ? (true) : (false))), "html", null, true);
        echo ">ISLAM</label>
                            <label class=\"checkbox inline\"><input type=\"checkbox\" name=\"agama[]\" value=\"KRISTEN\" ";
        // line 99
        echo twig_escape_filter($this->env, set_checkbox("agama[]", "KRISTEN", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "agama", array(), "any", true, true) && twig_in_filter("KRISTEN", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "agama")))) ? (true) : (false))), "html", null, true);
        echo ">KRISTEN</label>
                            <label class=\"checkbox inline\"><input type=\"checkbox\" name=\"agama[]\" value=\"KATOLIK\" ";
        // line 100
        echo twig_escape_filter($this->env, set_checkbox("agama[]", "KATOLIK", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "agama", array(), "any", true, true) && twig_in_filter("KATOLIK", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "agama")))) ? (true) : (false))), "html", null, true);
        echo ">KATOLIK</label>
                            <label class=\"checkbox inline\"><input type=\"checkbox\" name=\"agama[]\" value=\"HINDU\" ";
        // line 101
        echo twig_escape_filter($this->env, set_checkbox("agama[]", "HINDU", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "agama", array(), "any", true, true) && twig_in_filter("HINDU", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "agama")))) ? (true) : (false))), "html", null, true);
        echo ">HINDU</label>
                            <label class=\"checkbox inline\"><input type=\"checkbox\" name=\"agama[]\" value=\"BUDHA\" ";
        // line 102
        echo twig_escape_filter($this->env, set_checkbox("agama[]", "BUDHA", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "agama", array(), "any", true, true) && twig_in_filter("BUDHA", $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "agama")))) ? (true) : (false))), "html", null, true);
        echo ">BUDHA</label>
                        </p>
                    </td>
                <tr>
                <tr>
                    <th>Kelas</th>
                    <td>
                        <ul class=\"unstyled inline\" style=\"margin-left: -5px;\">
                            ";
        // line 110
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kelas_all"]) ? $context["kelas_all"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 111
            echo "                                <li><label class=\"checkbox inline\"><input type=\"checkbox\" name=\"kelas_id[]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, set_checkbox("kelas_id[]", $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "kelas_id", array(), "any", true, true) && twig_in_filter($this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "kelas_id")))) ? (true) : (false))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
            echo "</label></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                        </ul>
                    </td>
                <tr>
                <tr>
                    <th>Status</th>
                    <td>
                        <p style=\"margin-top:0px; margin-bottom:5px;\">
                            <label class=\"checkbox inline\"><input type=\"checkbox\" name=\"status_id[]\" value=\"0\" ";
        // line 120
        echo twig_escape_filter($this->env, set_checkbox("status_id[]", "0", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id", array(), "any", true, true) && twig_in_filter(0, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id")))) ? (true) : (false))), "html", null, true);
        echo "> Pending</label>
                            <label class=\"checkbox inline\"><input type=\"checkbox\" name=\"status_id[]\" value=\"1\" ";
        // line 121
        echo twig_escape_filter($this->env, set_checkbox("status_id[]", "1", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id", array(), "any", true, true) && twig_in_filter(1, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id")))) ? (true) : (false))), "html", null, true);
        echo "> Aktif</label>
                            <label class=\"checkbox inline\"><input type=\"checkbox\" name=\"status_id[]\" value=\"2\" ";
        // line 122
        echo twig_escape_filter($this->env, set_checkbox("status_id[]", "2", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id", array(), "any", true, true) && twig_in_filter(2, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id")))) ? (true) : (false))), "html", null, true);
        echo "> Blocking</label>
                            <label class=\"checkbox inline\"><input type=\"checkbox\" name=\"status_id[]\" value=\"3\" ";
        // line 123
        echo twig_escape_filter($this->env, set_checkbox("status_id[]", "3", ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id", array(), "any", true, true) && twig_in_filter(3, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "status_id")))) ? (true) : (false))), "html", null, true);
        echo "> Alumni</label>
                        </p>
                    </td>
                <tr>
                <tr>
                    <th>Username</th>
                    <td>
                        <input type=\"text\" name=\"username\" class=\"span3\" style=\"margin-bottom:0px;\" value=\"";
        // line 130
        echo twig_escape_filter($this->env, set_value("username", (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "username", array(), "any", true, true)) ? ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "username")) : (""))), "html", null, true);
        echo "\">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type=\"submit\" class=\"btn btn-primary\">Filter</button>
                    </td>
                </tr>
            </table>
            ";
        // line 140
        echo form_close();
        echo "
        </div>

        <br>

        ";
        // line 145
        echo form_open("admin/siswa/filter_action");
        echo "
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th width=\"7%\">
                        <input type=\"checkbox\" style=\"margin-top:-2px;\" onclick=\"ch_uch_checkbox(this)\">
                        No
                    </th>
                    <th colspan=\"2\">Nis</th>
                    <th>Nama</th>
                    <th width=\"15%\">Kelas</th>
                    <th width=\"10%\">Status</th>
                    <th width=\"22%\"></th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 161
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["siswas"]) ? $context["siswas"] : null));
        foreach ($context['_seq'] as $context["no"] => $context["v"]) {
            // line 162
            echo "                <tr>
                    <td>
                        <input type=\"checkbox\" name=\"siswa_id[]\" value=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
            echo "\" style=\"margin-top:-2px;\" ";
            echo ((($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id") == 3)) ? ("disabled") : (""));
            echo ">
                        ";
            // line 165
            echo twig_escape_filter($this->env, (isset($context["no"]) ? $context["no"] : null), "html", null, true);
            echo ".
                    </td>
                    <td width=\"5%\">
                        <img style=\"height:30px;width:27px;\" class=\"img-polaroid\" src=\"";
            // line 168
            echo twig_escape_filter($this->env, get_url_image_siswa($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "foto"), "small", $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "jenis_kelamin")), "html", null, true);
            echo "\">
                    </td>
                    <td>
                        ";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "nis"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "nama"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 177
            $context["kelas_aktif"] = get_row_data("kelas_model", "retrieve_siswa", array(0 => null, 1 => array("siswa_id" => $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "aktif" => "1")));
            // line 178
            echo "                        ";
            echo twig_escape_filter($this->env, get_row_data("kelas_model", "retrieve", array(0 => $this->getAttribute((isset($context["kelas_aktif"]) ? $context["kelas_aktif"] : null), "kelas_id"), 1 => true), "nama"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 181
            if (($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id") == 0)) {
                // line 182
                echo "                            Pending
                        ";
            } elseif (($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id") == 1)) {
                // line 184
                echo "                            Aktif
                        ";
            } elseif (($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id") == 2)) {
                // line 186
                echo "                            Blocking
                        ";
            } elseif (($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id") == 3)) {
                // line 188
                echo "                            Alumni
                        ";
            }
            // line 190
            echo "                    </td>
                    <td>
                        <ul class=\"nav nav-pills\" style=\"margin-bottom:0px;\">
                            <li><a class=\"btn btn-default btn-small\" href=\"";
            // line 193
            echo twig_escape_filter($this->env, site_url(((("admin/siswa/detail/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"))), "html", null, true);
            echo "\"><i class=\"icon-zoom-in\"></i> Detail</a></li>
                            <li class=\"dropdown\">
                                <a class=\"btn btn-default btn-small\" href=\"#\" id=\"act-";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-edit\"></i> Edit <b class=\"caret\" style=\"margin-top:5px;\"></b></a>
                                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"act-";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id"), "html", null, true);
            echo "\">
                                    <li>";
            // line 197
            echo anchor(((("admin/siswa/edit_profile/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Profil", array("class" => "iframe-4", "title" => "Edit Profil Siswa"));
            echo "</li>
                                    <li>";
            // line 198
            echo anchor(((("admin/siswa/edit_picture/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Foto", array("class" => "iframe-5", "title" => "Edit Foto Siswa"));
            echo "</li>
                                    ";
            // line 199
            if (($this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id") != 3)) {
                // line 200
                echo "                                    <li>";
                echo anchor(((("admin/siswa/moved_class/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Kelas Aktif", array("class" => "iframe", "title" => "Edit Kelas Aktif"));
                echo "</li>
                                    ";
            }
            // line 202
            echo "                                    <li>";
            echo anchor(((("admin/siswa/edit_username/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Username", array("class" => "iframe-2", "title" => "Edit Username Siswa"));
            echo "</li>
                                    <li>";
            // line 203
            echo anchor(((("admin/siswa/edit_password/" . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "status_id")) . "/") . $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "id")), "Edit Password", array("class" => "iframe-3", "title" => "Edit Password Siswa"));
            echo "</li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['no'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "            </tbody>
        </table>

        ";
        // line 213
        if ((!twig_test_empty((isset($context["siswas"]) ? $context["siswas"] : null)))) {
            // line 214
            echo "        <br>
        <div class=\"row-fluid\">
            <div class=\"span8\">
                <table cellpadding=\"5\">
                    <tr>
                        <th valign=\"top\">Aksi Terpilih</th>
                        <td valign=\"top\">
                            <select name=\"status_id\" style=\"width:auto;\">
                                <option value=\"\">--Update Status--</option>
                                <option value=\"1\">Aktif</option>
                                <option value=\"2\">Blocking</option>
                                <option value=\"3\">Alumni</option>
                            </select>
                        </td>
                        <td valign=\"top\">
                            <select name=\"kelas_id\" style=\"width:auto;\">
                                <option value=\"\">--Pindah Kelas--</option>
                                ";
            // line 231
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["kelas"]) ? $context["kelas"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                // line 232
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 234
            echo "                            </select>
                        </td>
                        <td valign=\"top\">
                            <button type=\"submit\" class=\"btn btn-primary\">Update</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        ";
        }
        // line 244
        echo "
        ";
        // line 245
        echo form_close();
        echo "

        <br>
        ";
        // line 248
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "

    </div>
</div>
";
    }

    // line 254
    public function block_js($context, array $blocks = array())
    {
        // line 255
        $this->displayParentBlock("js", $context, $blocks);
        echo "
<script type=\"text/javascript\">
\$(function() {
    function view_form_search() {
        \$(\"#form-search\").toggle();
    }
    ";
        // line 261
        if ((!twig_test_empty((isset($context["filter"]) ? $context["filter"] : null)))) {
            // line 262
            echo "    view_form_search();
    ";
        }
        // line 264
        echo "    \$( \"#button\" ).click(function() {
    view_form_search();
    });
});

function ch_uch_checkbox(source){
    checkboxes = document.getElementsByName('siswa_id[]');
    for(var i=0, n=checkboxes.length;i<n;i++) {
      checkboxes[i].checked = source.checked;
    }
}
</script>
";
    }

    public function getTemplateName()
    {
        return "admin_siswa/filter.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  532 => 264,  528 => 262,  526 => 261,  517 => 255,  514 => 254,  505 => 248,  499 => 245,  496 => 244,  484 => 234,  473 => 232,  469 => 231,  450 => 214,  448 => 213,  443 => 210,  430 => 203,  425 => 202,  419 => 200,  417 => 199,  413 => 198,  409 => 197,  405 => 196,  401 => 195,  396 => 193,  391 => 190,  387 => 188,  383 => 186,  379 => 184,  375 => 182,  373 => 181,  366 => 178,  364 => 177,  358 => 174,  352 => 171,  346 => 168,  340 => 165,  334 => 164,  330 => 162,  326 => 161,  307 => 145,  299 => 140,  286 => 130,  276 => 123,  272 => 122,  268 => 121,  264 => 120,  255 => 113,  242 => 111,  238 => 110,  227 => 102,  223 => 101,  219 => 100,  215 => 99,  211 => 98,  201 => 91,  192 => 85,  189 => 84,  176 => 82,  172 => 81,  167 => 78,  154 => 76,  150 => 75,  139 => 67,  130 => 61,  119 => 53,  113 => 50,  102 => 42,  93 => 36,  85 => 31,  73 => 22,  69 => 21,  65 => 20,  61 => 19,  57 => 18,  49 => 13,  42 => 9,  36 => 6,  32 => 4,  29 => 3,);
    }
}
