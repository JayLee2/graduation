'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var upload = function () {
    function upload() {
        _classCallCheck(this, upload);

        this.fileStyle = 'width:100px;height:30px;background:blue;border-radius:10px';
        this.upBtnStyle = 'width:100px;height:30px;background:orange;border-radius:10px';
        this.viewStyle = 'height:100px;border:1px solid #ccc';
        this.divListStyle = 'width:100px;height:100px;border:1px solid #000;float:left';
        this.data = [];
        this.cuoList = [];
        this.backList = [];
    }

    _createClass(upload, [{
        key: 'createView',
        value: function createView(obj) {
            var that = this;
            this.createFile(obj.parent, obj.fileBtn, function () {
                var divView = document.createElement('div');
                that.divView = divView;
                divView.style.cssText = that.viewStyle;
                that.parent.appendChild(divView);
            });
            this.createUpBtn();
        }
    }, {
        key: 'createFile',
        value: function createFile(parent, fileBtn, callback) {
            if (!parent) {
                console.error('必须制定父元素');
                return false;
            }
            if (fileBtn) {
                this.fileBtn = fileBtn;
            } else {
                var file = document.createElement('input');
                this.fileBtn = file;
            }
            this.parent = parent;

            var div = document.createElement('div');
            this.fileBtn.type = 'file';
            this.fileBtn.multiple = 'multiple';
            this.fileBtn.style.cssText = this.fileStyle;
            this.fileBtn.style.opacity = 0;
            div.style.cssText = this.fileStyle;
            div.style.color = '#fff';
            div.innerHTML = '请选择上传';
            div.style.textAlign = 'center';
            this.fileBtn.style.position = 'absolute';
            div.style.lineHeight = '30px';
            parent.appendChild(this.fileBtn);
            parent.appendChild(div);
            callback();
        }
    }, {
        key: 'createUpBtn',
        value: function createUpBtn() {
            var div = document.createElement('div');
            div.style.cssText = this.upBtnStyle;
            this.parent.appendChild(div);
            this.upBtn = div;
            div.innerHTML = '请上传';
            div.style.color = '#fff';
            div.style.textAlign = 'center';
            div.style.lineHeight = '30px';
        }
    }, {
        key: 'change',
        value: function change() {
            var that = this;
            this.fileBtn.onchange = function () {
                that.data = Array.prototype.slice.call(this.files);
                that.check();
            };
        }
    }, {
        key: 'check',
        value: function check() {
            var that = this;

            var _loop = function _loop(i) {
                var div = document.createElement('div');
                div.style.cssText = that.divListStyle;
                var cuo = document.createElement('p');
                var back = document.createElement('div');
                div.appendChild(back);
                back.style.cssText = 'width:0%;position:absolute;bottom:0;height:5px;background:red';
                that.backList.push(back);
                div.style.position = 'relative';
                cuo.style.cssText = 'width:20px;height:20px;text-align:center;lineHeight:20px;position:absolute;right:5px;top:5px;zIndex:10;background:rgba(0,0,0,0.7);color:white;display:none;cursor:pointer';
                cuo.innerHTML = 'X';
                div.appendChild(cuo);
                that.divView.appendChild(div);
                cuo.index = i;
                that.cuoList.push(cuo);
                var read = new FileReader();
                read.onload = function (e) {
                    var db = e.target.result;
                    div.style.background = 'url(' + db + ')';
                    div.style.backgroundSize = 'cover';
                };
                div.onmouseover = function () {
                    this.childNodes[1].style.display = 'block';
                };
                div.onmouseout = function () {
                    this.childNodes[1].style.display = 'none';
                };
                //删除操作
                // cuo.onclick=function () {
                //     this.parentNode.parentNode.removeChild(this.parentNode)
                //     let preIndex=this.parentNode.index;
                //     let temp=that.data[preIndex];
                //     that.data[preIndex]=that.data[that.data.length-1]
                //     that.data.push(temp);
                //     that.data.pop();
                //     console.log(preIndex)
                // }
                read.readAsDataURL(that.data[i]);
            };

            for (var i = 0; i < that.data.length; i++) {
                _loop(i);
            }
        }
    }, {
        key: 'shanchu',
        value: function shanchu() {
            var that = this;
            this.divView.onclick = function (e) {
                if (e.target.nodeName == 'P') {
                    e.target.parentNode.parentNode.removeChild(e.target.parentNode);
                    var preIndex = e.target.index;
                    var temp = that.data[preIndex];
                    that.data[preIndex] = that.data[that.data.length - 1];
                    that.data[that.data.length - 1] = temp;
                    that.data.pop();
                    console.log(that.data);
                }
            };
        }
    }, {
        key: 'up',
        value: function up(callback) {
            var that = this;
            this.upBtn.onclick = function () {
                var _loop2 = function _loop2(i) {
                    var ajax = new XMLHttpRequest();
                    var formObj = new FormData();
                    formObj.append('file', that.data[i]);
                    ajax.onload = function () {
                        console.log(ajax.response);
                        callback(ajax.response);
                    };
                    ajax.upload.onprogress = function (e) {
                        var tot = e.total;
                        var load = e.loaded;
                        var bili = load / tot * 100 + '%';
                        that.backList[i].style.width = bili;
                    };
                    ajax.open("post", "index.php?f=write&a=upload");
                    ajax.send(formObj);
                };

                for (var i = 0; i < that.data.length; i++) {
                    _loop2(i);
                }
            };
        }
    }]);

    return upload;
}();